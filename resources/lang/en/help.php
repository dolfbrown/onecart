<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Help Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to display application language.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    'add_input_field' => 'Add input field',

    'remove_input_field' => 'Remove this input field',

    'marketplace_name' => 'The name of the marketplace name. Visitors will see this name.',

    'system_legal_name' => 'The legal name of the business',

    'min_pass_lenght' => 'Minimum 6 characters',

    'role_name' => 'The title of the user role',

    'role_level' => 'Role level will be use determine who can control who. Example: An user with role level 2 can\'t modify any the user with role level 1. Keep emty if the role is for end level users.',

    'you_cant_set_role_level' => 'Only top-level users can set this value.',

    'cant_edit_special_role' => 'This role type is not editable. Be careful to modify the permissions of this role.',

    'set_role_permissions' => 'Set role permissions very carefully. Choose the \'Role Type\' to get approperit modules.',

    'permission_modules' => 'Enable the module to set permission for the module',

    'shipping_rate_delivery_takes' => 'Be specific, customer will see this.',

    'type_dbreset' => 'Type the exact word "RESET" in the box to confirm your wish.',

    'type_environment' => 'Type the exact word "ENVIRONMENT" in the box to confirm your wish.',

    'type_uninstall' => 'Type the exact word "UNINSTALL" in the box to confirm your wish.',

    'module_name' => 'All users under this role will be able to do specified actions to manage :module.',

    'currency_iso_code' => 'ISO 4217 code. For example, United States dollar has code USD and Japan\'s currency code is JPY.',

    'currency_subunit' => 'The subunit that is a fraction of the base unit. For example: cent, centavo, paisa',

    'currency_symbol_first' => 'Example: $13.21',

    'currency_decimalpoint' => 'Example: 13.21, 13,21',

    'currency_thousands_separator' => 'Example: 1,000, 1.000, 1 000',

    'cover_img_size' => 'Cover image size should be 1280x300px',

    'slug' => 'Slug are usually a search engine friendly URL',

    'url' => 'Web address',

    'optional' => '(optional)',

    'use_markdown_to_bold' => 'Add ** bothside of important keyword to highlight',

    'announcement_action_text' => 'Optional action button to link the announcement to any url',

    'announcement_action_url' => 'The action url to blog post or any url',

    // 'help_doc_link' => 'Help document link',

    'blog_feature_img_hint' => 'The image size should be 960x480px',

    'code' => 'Code',

    'brand' => 'The brand of the product. Not required but recommended',

    'system_maintenance_mode_handle' => 'If maintenance mode is on, the marketplace will be offline and the maintenance mode flag will be shown to the visitors. Still merchants can access their admin panel.',

    'system_physical_address' => 'The physical location of the marketplace/office',

    'system_email' => 'All notifications will be send to this email address, accept support emails(if set)',

    'system_timezone' => 'This system will use this timezone to operate.',

    'system_currency' => 'The marketplace currency',

    'system_slogan' => 'The tagline that describe your marketplace most',

    'system_length_unit' => 'Unit of length will be use all over the marketplace.',

    'system_weight_unit' => 'Unit of weight will be use all over the marketplace.',

    'system_valume_unit' => 'Unit of valume will be use all over the marketplace.',

    'ask_customer_for_email_subscription' => 'When a new customer register an account ask your customer if he/she want to get promotions and other notifications on email. Turning the option off will result in auto subscription. In that case, make the clear on the terms and condition section.',

    'allow_guest_checkout' => 'This will allow customers to checkout without registering on the site.',

    'system_pagination' => 'Set the pagination value for the data tables on the admin panel.',
    'config_return_refund' => 'Return & refund policy for you shop. Please read the marketplace\'s policy before you specify yours.',

    'charge_after_trial_days' => 'Will be charged after the :days days trial period.',

    'leave_empty_to_save_as_draft' => 'Leave empty to save as draft',

    'logo_img_size' => 'Logo image size should be minimum 300x300px',

    'brand_logo_size' => 'Logo image size should be 120x40px and .png',

    'brand_icon_size' => 'Icon image size should be 32x32px and .png',

    'config_alert_quantity' => 'A notification email will be send your inventory goes below the alert quantity',

    'config_max_img_size_limit_kb' => 'The maximum image size limit system can upload for product/inventory/logo/avatar. The size in kilobytes.',

    'config_max_number_of_inventory_imgs' => 'Choose how many images can be uploaded for a single inventory item.',

    'config_address_default_country' => 'Set this value to fill the address form faster. Obviously, a user can change the value when adding new address.',

    'config_address_default_state' => 'Set this value to fill the address form faster. Obviously, a user can change the value when adding new address.',

    'config_show_address_title' => 'Show/Hide address title while view/print an address.',

    'config_address_show_country' => 'Show/Hide country name while view/print an address. This is helpful if your marketplace within a small region.',

    'config_address_show_map' => 'Want to show map with addresses? This option will generate map using Google Map.',

    'config_show_currency_symbol' => 'Do you want to show currency symbol when reprenting a price?  Example: $123',

    'config_show_space_after_symbol' => 'Want to formate the price by puting a space after the symbol. Example: $ 123',

    'config_decimals' => 'How many digits you want to show after the decimal point? Example: 13.21, 13.123',

    'config_gift_card_pin_size' => 'How many digits you want to generate giftcard pin number. Default length 10',

    'config_gift_card_serial_number_size' => 'How many digits you want to generate giftcard seria number. Default length 13',

    'config_coupon_code_size' => 'How many digits you want to generate coupon code. Default length 8',

    'attribute_type' => 'The type of attribute. This will help to show the options on the product page.',

    'attribute_name' => 'This name will show on the product page.',

    'attribute_value' => 'This value will show on the product page as selectable option.',

    'parent_attribute' => 'The option will be shown under this arrtibute.',

    'list_order' => 'Viewing order on the list.',

    'product_title' => 'This title will helps customets to find the item.',

    'product_featured_image' =>  'This primary image.',

    'product_images' => 'Customers will see this images.',

    'product_active' => 'Active items will be displayed on the frontpage.',

    'product_description' => 'Customers will see this. This is the core and common product description.',

    'model_number' => 'An identifier of a product given by its manufacturer. Not required but recommended',

    'gtin' => 'Global Trade Item Number (GTIN) is a unique identifier of a product in the global marketplace. If you like to obtain an ISBN or UPC code for your product, you will find more information at the following websites: http://www.isbn.org/ and http://www.uc-council.org/',

    'mpn' => 'Manufacturer Part Number (MPN) is an unique identifier issued by the manufacturer. You can obtain MPNs from the manufacturer. Not required but recommended',

    'sku' => 'SKU (Stock Keeping Unit) is the seller specific identifier. It will help to manage your inventory',

    'isbn' => 'The International Standard Book Number (ISBN) is a unique commercial book identifier barcode. Each ISBN code identifies uniquely a book. ISBN have either 10 or 13 digits. All ISBN assigned after 1 Jan 2007 have 13 digits. Typically, the ISBN is printed on the back cover of the book',

    'ean' => 'The European Article Number (EAN) is a barcode standard, a 12- or 13-digit product identification  code. You can obtain EANs from the manufacturer. If your products do not have manufacturer EANs, and you need to buy EAN codes, go to GS1 UK http://www.gs1uk.org',

    'upc' => 'Universal Product Code (UPC), also called GTIN-12 and UPC-A. A unique numerical identifier for commercial products that\'s usually associated with a barcode printed on retail merchandise',

    'meta_title' => 'Title tags—technically called title elements—define the title of a document. Title tags are often used on search engine results pages (SERPs) to display preview snippets for a given page, and are important both for SEO and social sharing',

    'meta_description' => 'Meta descriptions are HTML attributes that provide concise explanations of the contents of web pages. Meta descriptions are commonly used on search engine result pages (SERPs) to display preview snippets for a given page',

    // 'has_variant' => 'This item has variants like different colors, shapes, sizes etc.',

    'requires_shipping' => 'This item requires shipping.',

    'downloadable' => 'This item is a digital content and buyers can download the item.',

    'downloadable_file' => 'This is the original downloadable file that buyers can download after purchase.',

    'manufacturer_url' => 'The official website link of the manufacturer.',

    'manufacturer_email' => 'The system will use this email address to communicate with the manufacturer.',

    'manufacturer_phone' => 'The support phone number of the manufacturer.',

    'supplier_email' => 'The system will use this email address to communicate with the supplier.',

    'supplier_contact_person' => 'Contact person',

    'shop_address' => 'The physical address of the shop.',

    'search_product' => 'You can use any GTIN identifier like UPC, ISBN, EAN, JAN or ITF. You can also use name and model number OR part of name or model number.',

    'seller_product_condition' => 'What is the current condition of the product?',

    'condition_note' => 'Condition note is helpful when the product is used/refurbished',

    'select_supplier' => 'Recommended field. This will helps to generate reports',

    'select_warehouse' => 'Choose the warehouse from where the product will be shipped.',

    'select_packagings' => 'List of available packaging options to ship the product. Leave blank to disable packaging option',

    'available_from' => 'The date when the stock will be available. Default = immediately',

    'price' => 'The price without any tax. Tax will be calculated autometically based on shipping zone.',

    'purchase_price' => 'Recommended field. This will helps to calculate profits and generate reports',

    'min_order_quantity' => 'The quantity allowed to take orders. Must be an integer value. Default = 1',

    'offer_price' => 'The offer price will be effected between the offer start and end dates',

    'offer_start' => 'An offer must have a start date. Required if offer price field is given',

    'offer_end' => 'An offer must have an end date. Required if offer price field is given',

    'stock_quantity' => 'Number of items you have on your warehouse',

    'offer_starting_time' => 'Offer starting time',

    'offer_ending_time' => 'Offer ending time',

    'set_attribute' => 'If the value is not on the list, you can add appropriate value by just typing the new value',

    'variants' => 'Product variants',

    'delete_this_combination' => 'Delete this combination',

    'romove_this_cart_item' => 'Romove this item from the cart',

    'no_product_found' => 'No product found! Please try different search or add new product',

    'not_available' => 'Not available!',

    'admin_note' => 'Admin note will not visible to customer',

    'message_to_customer' => 'This message will send to customer with the invoice email',

    'empty_cart' => 'The cart is empty',

    'send_invoice_to_customer' => 'Send an invoice to customer with this message',

    'delete_the_cart' => 'Delete the cart and proceed the order',

    'order_status_name' => 'The title of the status that will be visible everywhere.',

    'order_status_color' => 'The label color of the order status',

    'order_status_send_email' => 'An email will be sent to the customer when the order status updates',

    'order_status_email_template' => 'This email template will be sent to the customer when the order status updates. Mandatory if the email is enabled for the status',

    'update_order_status' => 'Update the order status',

    'email_template_name' => 'Give the template a name. This is for system use only.',

    'email_template_subject' => 'This will use as the subject of the email.',

    'email_template_body' => 'There are some short codes you can use for dynamic information. Check the bottom of this form to see the available short codes.',

    'email_template_type' => 'The type of the email.',

    'template_sender_email' => 'This email address will use to send emails and receiver can reply to this.',

    'template_sender_name' => 'This name will use as sender name',

    'packaging_name' => 'Customer will see this if the packaging option is available on order checkout',

    'width' => 'The width of the packaging',

    'height' => 'The height of the packaging',

    'depth' => 'The depth of the packaging',

    'packaging_cost' => 'The cost of packaging. You can choose if you want to charge the cost to customers or not',

    'set_as_default_packaging' => 'If checked: this packaging will be used as default shipping package',

    'shipping_carrier_name' => 'Name of the shipping carrier',

    'shipping_zone_name' => 'Give a name of zone. Customer will not see this name.',

    'shipping_rate_name' => 'Give a meaningful name. Customer will see this name at checkout. e. g. \'standard shipping\'',

    'shipping_zone_carrier' => 'You can link the shipping carrier. Customer will see this at checkout.',

    'free_shipping' => 'If enabled, The free shipping label will be displayed on the product listing page.',

    'shipping_rate' => 'Check the \'Free shipping\' option or give 0 amount for free shipping',

    'shipping_zone_tax' => 'This tax profile will be applicable when customer make a purchase from this shipping zone',

    'shipping_zone_select_countries' => 'Select countries to this zone that you ship to. Check Rest of the world option for worldwide zone.',

    'rest_of_the_world' => 'This zone includes any countries and regions not already defined in your other shipping zones.',

    'shipping_max_width' => 'Maximum package width handle by the carrier. Leave empty to disable.',

    'shipping_tracking_url' => ' \'@\' will be replaced by the dynamic tracking number',

    'shipping_tracking_url_example' => 'e.g.: http://example.com/track.php?num=@',

    'order_tracking_id' => 'Order tracking ID provided by the shipping service provider.',

    'order_fulfillment_carrier' => 'Choose the shipping carrier to fulfill the order.',

    'notify_customer' => 'A notification email will be send to the customer with necessary information.',

    'order_status_fulfilled' => 'Do you want to mark the order as fulfilled when the order status changed to this?',

    'shipping_weight' => 'The will be used to calculate the shipping cost.',

    'order_number_prefix_suffix' => 'The prefix and suffix will be added autometically to formate all order numbers. Leave it blank if you don\'t want to formate order numbers.',

    'customer_not_see_this' => 'Customer will not see this',

    'customer_will_see_this' => 'Customers will see this',

    'refund_select_order' => 'Select the order you want to refund',

    'refund_order_fulfilled' => 'Is the order shipped to the customer?',

    'refund_return_goods' => 'Is the item returned to you?',

    'customer_paid' => 'Customer paid <strong><em> :amount </em></strong>, inclusive all taxes, shipping charges and others.',

    'order_refunded' => 'Previously refunded <strong><em> :amount </em></strong> of total <strong><em> :total </em></strong>',

    'search_customer' => 'Find the customer by email address, nice name or full name.',

    'coupon_quantity' => 'Total number of avaliable coupons',

    'coupon_name' => 'The name will be use in invoice and order summary',

    'coupon_code' => 'The unique coupon code',

    'coupon_value' => 'The value of the coupon',

    'coupon_min_order_amount' => 'Choose minimum order amount for the cart (optional)',

    'coupon_quantity_per_customer' => 'Choose how many times a customer can use this coupon. If you leave it empty then a customer can use this coupon till it\'s availablity.',

    'starting_time' => 'The coupon will be available from this time',

    'ending_time' => 'The coupon will be available till this time',

    'exclude_tax_n_shipping' => 'Exclude tax and shipping cost',

    'exclude_offer_items' => 'Exclude items that already have a running offer or discount',

    'coupon_limited_to_customers' => 'Choose if you want to make the coupon for specific customers only',

    'coupon_limited_to_shipping_zones' => 'Choose if you want to make the coupon for specific shipping zones only',

    'coupon_limited_to' => 'Use email address or name to find customers',

    'faq_placeholders' => 'You can use this placeholder in your question and answer, this will be replaces by the actual value',

    'gift_card_name' => 'The name of the gift card.',

    'gift_card_pin_code' => 'The unique secret code. The pin code is the passcode for the card. You can\'t change this value later.',

    'gift_card_serial_number' => 'The unique serial number for the card. You can\'t change this value later.',

    'gift_card_value' => 'The value of the card. The customer will receive same amount of discount.',

    'gift_card_activation_time' => 'Activation time of the card. The card can be used after this time.',

    'gift_card_expiry_time' => 'Expiry time of the card. The card can be valid till this time.',

    'gift_card_partial_use' => 'Allow partial use of total card value',

    'number_between' => 'Between :min and :max',

    'config_order_handling_cost' => 'This additional cost tille be added with the shipping cost of every orders. Leave it blank to disable order handling charge',

    'config_enable_payment_method' => 'Before activating a payment option, you must configure the payment gateway APIs. Otherwise, the system will get errors and you can\'t accept payment from customers.',

    'config_additional_details' => 'Displayed on the Payment method page, while the customer is choosing how to pay.',

    'config_payment_instructions' => 'Displayed on the Thank you page, after the customer has placed their order.',

    'config_auto_archive_order' => 'Automatically archive the order. Select this feature if you do not want to manually archive all orders after they have been fulfilled.',

    'config_pagination' => 'How many list items you want to view per page on the data tables',

    'support_phone' => 'Customer will contact this number for support and query',

    'support_email' => 'You\'ll get all support email to this address',

    'support_phone_toll_free' => 'If you have a toll free number for customer support',

    'default_sender_email_address' => 'All autometed emails to customers will be sent from this email address. And also when a sender email address can\'t set while sending an email',

    'default_email_sender_name' => 'This name will be used as the sender of email send from default sender email address',

    'google_analytic_report' => 'You should only enable this, If the system is configured with Google analytics. Otherwise, it may cause errors. Check the documentation for help. Alternatively you can use the application\'s built in report system. ',

    'inventory_linked_items' => 'The linked items will display on the product page as frequently bought together items. This is optional but important.',

    'notify_new_message' => 'Send me a notification when a new message arrived',

    'notify_alert_quantity' => 'Send me a notification when any item on my inventory reach the alert quantity level',

    'notify_inventory_out' => 'Send me a notification when any item on my inventory stock out',

    'notify_new_order' => 'Send me a notification when a new order has been placed on my store',

    'notify_abandoned_checkout' => 'Send me a notification when customer abandoned checkout of my item',

    'notify_new_disput' => 'Send me a notification when a customer submit a new dispute',

    'notify_when_dispute_appealed' => 'Send me a notification when a dispute has been appealed to review by marketplace team',

    'download_template' => '<a href=":url">Download a sample CSV template</a> to see an example of the format required.',

    'download_category_slugs' => '<a href=":url">Download category slugs</a> to get the correct category for your products.',

    'first_row_as_header' => 'The first row is the header. <strong>Don\'t change</strong> this row.',

    'user_category_slug' => 'Use category <strong>slug</strong> in category field.',

    'cover_img' => 'This image will display on the top of the :page page',

    'cat_grp_img' => 'This image will display on the background of the category dropdown box',

    'cat_grp_desc' => 'Customer will not see this. But Merchants will see this.',

    'inactive_for_back_office' => 'If inactive, Customers can still visit the :page page. But back office will not able to use this :page for future listing.',

    'invalid_rows_will_ignored' => 'Invalid rows will be <strong>ignored</strong>.',

    'upload_rows' => 'Upload no more than <strong>:rows rows</strong> per batch for better performance.',

    'name_field_required' => 'Name field is required.',

    'title_field_required' => 'The title field is required.',

    'email_field_required' => 'Email is required.',

    'invalid_email' => 'Invalid email address.',

    'invalid_category' => 'Invalid category.',

    'category_desc' => 'Give a short detail. Customers will see this.',

    'email_already_exist' => 'The email address already in use.',

    'slug_already_exist' => 'The slug already in use.',

    'display_order' => 'This number will be used to arrange viewing order. The smallest number will display first.',

    'banner_title' => 'This line will be highlighted on the banner. Leave it blank if you don\'t want to show the title.',

    'banner_description' => '( Example: 50% Off! ) Leave it blank if you don\'t want to show this.',

    'banner_image' => 'The main image what will display over the background. Commonly use a product image.',

    'banner_background' => 'Choose a color or upload an image as the background.',

    'banner_group' => 'The placement of the banner on the storefront. The banner will not display if the group is not specified.',

    'bs_columns' => 'How many columns this banner will use? The system uses 12 columns grid system to display banners.',

    'banner_order' => 'This number will be used to arrange viewing order in the group of banners. The smallest number will display first.',

    'banner_link' => 'Users will redirect to this link.',

    'link_label' => 'The label of the link button',

    'slider_link' => 'Users will redirect to this link.',

    'slider_title' => 'This line will be highlighted over the slider. Leave it blank if you don\'t want to show the title.',

    'slider_sub_title' => 'The second line of the title. Leave it blank if you don\'t want to show this.',

    'slider_image' => 'The main image what will display as slider. Its required to generate the slider.',

    'slider_img_hint' => 'The slider image should be 1280x300px',

    'slider_order' => 'The slider will be  arranged by this order.',

    'slider_thumb_image' => 'This small image will be used as thumbnail. The system will create a thumbnail if not provided.',

    'slider_thumb_hint' => 'It can be 150x59px',

    'variant_image' => 'Assign a image to every variant so that customer can see on your product page',

    'choose_attributes' => 'Choose all of your attributes and then click <strong>SET VARIANTS</strong> button to generate all possible combinations.',

    'modify_fb_config_file' => 'You need to get the messenger configuration from Facebook. misconfiguring may result in errors on your site. Please check the documentation for help.',
];
