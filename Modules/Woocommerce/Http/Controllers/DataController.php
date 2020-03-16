<?php

namespace Modules\Woocommerce\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;

class DataController extends Controller
{
    public function dummy_data()
    {
        Artisan::call('db:seed', ["--class" => 'Modules\Woocommerce\Database\Seeders\AddDummySyncLogTableSeeder']);
    }

    public function superadmin_package()
    {
        return [
            [
                'name' => 'woocommerce_module',
                'label' => __('woocommerce::lang.woocommerce_module'),
                'default' => false
            ]
        ];
    }

    /**
     * Defines user permissions for the module.
     * @return array
     */
    public function user_permissions()
    {
        return [
            [
                'value' => 'woocommerce.syc_categories',
                'label' => __('woocommerce::lang.sync_product_categories'),
                'default' => false
            ],
            [
                'value' => 'woocommerce.sync_products',
                'label' => __('woocommerce::lang.sync_products'),
                'default' => false
            ],
            [
                'value' => 'woocommerce.sync_orders',
                'label' => __('woocommerce::lang.sync_orders'),
                'default' => false
            ],
            [
                'value' => 'woocommerce.map_tax_rates',
                'label' => __('woocommerce::lang.map_tax_rates'),
                'default' => false
            ],
            [
                'value' => 'woocommerce.access_woocommerce_api_settings',
                'label' => __('woocommerce::lang.access_woocommerce_api_settings'),
                'default' => false
            ],

        ];
    }

    /**
     * Parses notification message from database.
     * @return array
     */
    public function parse_notification($notification)
    {
        $notification_data = [];
        if ($notification->type ==
            'Modules\Woocommerce\Notifications\SyncOrdersNotification') {
            $msg = __('woocommerce::lang.orders_sync_notification');

            $notification_data = [
                'msg' => $msg,
                'icon_class' => "fa fa-refresh text-primary",
                'link' =>  action('SellController@index'),
                'read_at' => $notification->read_at,
                'created_at' => $notification->created_at->diffForHumans()
            ];
        }

        return $notification_data;
    }

    /**
     * Returns product form part path with required extra data.
     *
     * @return array
     */
    public function product_form_part()
    {
        $path = 'woocommerce::woocommerce.partials.product_form_part';

        $business_id = request()->session()->get('user.business_id');
        return  [
            'template_path' => $path,
            'template_data' => []
        ];
    }

    /**
     * Returns products table extra columns for this module
     *
     * @return array
     */
    public function product_form_fields()
    {
        return ['woocommerce_disable_sync'];
    }
}
