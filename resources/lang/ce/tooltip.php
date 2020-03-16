<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tooltip Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various help texts.
    |
    */

    'product_stock_alert'=>"庫存較低的產品。<br/> <small class='text-muted'>根據產品提醒數量在添加產品屏幕中設置。<br>在庫存結束前購買此產品。</small>",

    'payment_dues'=>"等待購買付款。<br/> <small class='text-muted'>根據供應商的付款期限。<br/>顯示付款在7天或更短時間內支付。</small>",

    'input_tax'=>'在選定時間段內為銷售收取的總稅額。',

    'output_tax'=>'在選定時間段內為購買支付的總稅額。',

    'tax_overall'=>'在選定的時間段內收取的總稅額與支付的總稅額之間的差異。',

    'purchase_due'=>'未付款總額。',

    'sell_due'=>'從銷售中收到的總金額',

    'over_all_sell_purchase'=>' -  ave value =支付金額<br> + ve值=接收金額',

    'no_of_products_for_trending_products'=>'下表中要比較的熱門趨勢產品數量。',

    'top_trending_products'=>"您商店的暢銷產品。<br/> <small class='text-muted'>應用過濾器以了解特定類別,品牌,營業地點等的趨勢產品。</small>",

    'sku'=>"獨特的產品ID或庫存單位<br> <br>保持空白以自動生成sku。<br> <small class='text-muted'>您可以在商業設置中修改sku前綴。</small>",

    'enable_stock'=>"啟用或禁用產品的庫存管理。<br> <br> <small class='text-muted'>庫存管理應該主要用於服務。示例：剪髮,修復等</small>",

    'alert_quantity'=>"當產品庫存達到或低於指定數量時獲取警報。<br> <br> <small class='text-muted'>庫存低的產品將顯示在儀表板中 - 產品庫存警報部分。 </small>",

    'product_type'=>'<b>單品</b>：產品沒有變化。
    <br> <b>可變產品</b>：產品有尺寸,顏色等變化',

    'profit_percent'=>"產品的默認利潤率。<br> <small class='text-muted'>（<i>您可以在業務設置中管理默認利潤率。</i>）</small>" ,

    'pay_term'=>"在給定時間段內為購買/銷售支付的款項。<br/> <small class='text-muted'>所有即將到期或到期付款將顯示在儀表板中 - 付款到期部分</small>",

    'order_status'=>'此次購買的商品僅在<b>訂單狀態</b>為<b>收到的商品</b>時才可供銷售。',

    'purchase_location'=>'所購買產品可供銷售的營業地點。',

    'sale_location'=>'您想要銷售的商家位置',

    'sale_discount'=>"為商家設置中的所有銷售設置'默認銷售折扣'。點擊下面的編輯圖標添加/更新折扣。",

    'sale_tax'=>"為商家設置中的所有銷售設置'默認銷售稅'。點擊下面的編輯圖標添加/更新訂單稅。",

    'default_profit_percent'=>"產品的默認利潤率。<br> <small class='text-muted'>用於根據輸入的購買價格計算銷售價格。<br/>您可以為單個產品修改此值加入</small>",

    'fy_start_month'=>'為您的企業創建財政年度的月份',

    'business_tax'=>'您公司的註冊稅號。',

    'invoice_scheme'=>"發票方案是指發票編號格式。選擇要用於此業務地點的方案<br> <small class='text-muted'> <i>您可以添加新的發票方案</b>發票設置</i> </small>",

    'invoice_layout'=>"要用於此營業地點的發票佈局<br> <small class='text-muted'>（<i>您可以在<b>發票中添加新的<b>發票佈局</b>設置的<b> </i>的）</small>",

    'invoice_scheme_name'=>'為發票方案提供一個簡短有意義的名稱。',

    'invoice_scheme_prefix'=>'發票方案的前綴。<br>前綴可以是自定義文本或當前年份。例如：＃XXXX0001,＃2018-0002',

    'invoice_scheme_start_number'=>"發票編號的起始編號。<br> <small class='text-muted'>您可以將其編號為1或任何其他編號將開始編號。</small>",

    'invoice_scheme_count'=>'為發票方案生成的發票總數',

    'invoice_scheme_total_digits'=>'發票前綴不包括發票號碼的長度',

    'tax_groups'=>'組稅率 - 上面定義,在購買/銷售部分組合使用。',

    'unit_allow_decimal'=>'十進制允許您以分數形式出售相關產品。',

    'print_label'=>'添加產品 - >選擇要在標籤中顯示的信息 - >選擇條形碼設置 - >預覽標籤 - >打印',

    'expense_for'=>'選擇與費用相關的用戶。 <i>（可選）</i> <br/> <small>示例：員工的薪水。</small>',
    
    'all_location_permission'=>'如果選擇了<b>所有地點</b>,則此職務將擁有訪問所有營業地點的權限',

    'dashboard_permission'=>'如果未選中,歡迎信息將顯示在主頁中。',

    'access_locations_permission'=>'選擇此角色可以訪問的所有位置。所選位置的所有數據僅顯示給用戶。<br/> <br/> <small>例如：您可以使用它來定義<i>商店經理/收銀員/庫存經理/分行經理,</我>特定位置。</small>',

    'print_receipt_on_invoice'=>'啟用或禁用最終確認時自動打印發票',

    'receipt_printer_type'=>'<i>基於瀏覽器的打印 </i>：在瀏覽器中在發票預覽中顯示打印框 <br/> <br/> <i>使用已配置的收據打印機 </i> ：選擇配置的收據/熱敏打印機進行打印',

    'adjustment_type'=>'<i>正常</i>：因洩漏,損壞等正常原因進行調整。<br/> <br/> <i>異常</i>：因火災,事故等原因進行調整',

    'total_amount_recovered'=>'從保險或銷售廢料或其他物品中收回的金額',

    'express_checkout'=>'標記完成付款和結帳',
    'total_card_slips'=>'此註冊表中使用的信用卡付款總數',
    'total_cheques'=>'此註冊表中使用的檢查總數',

    'capability_profile'=>'支持命令和代碼頁因打印機供應商和型號而異。如果您不確定,最好使用\'簡單\'功能配置文件',

    'purchase_different_currency'=>'如果您使用與商業貨幣不同的貨幣購買,請選擇此選項',

    'currency_exchange_factor'=>"1購買貨幣=？基礎貨幣<br> <small='文字靜音'>您可以啟用/禁用'從商業設置中以其他貨幣購買'。</small>",

    'accounting_method'=>'會計方法',

    'transaction_edit_days'=>'從交易日到交易可以編輯的天數。',
    'stock_expiry_alert'=>"到期的股票清單 :days 數<br> <br> <class class='text-muted'>您可以設置編號。業務設置中的天數</small>",
    'sub_sku'=>'Sku是可選的。 <br> <br> <small>保持空白以自動生成sku。<small>',
    'shipping'=>'設置運費詳情和運費。點擊下面的編輯圖標,添加/更新運費詳情和費用。'
];
