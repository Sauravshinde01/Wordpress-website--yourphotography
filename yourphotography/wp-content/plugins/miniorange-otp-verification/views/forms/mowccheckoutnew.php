<?php
/**
 * Load admin view for WooCommerceCheckoutForm.
 *
 * @package miniorange-otp-verification/views/forms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use OTP\Helper\MoMessages;

echo ' 	<div class="mo_otp_form" id="' . esc_attr( get_mo_class( $handler ) ) . '">
 	        <input  type="checkbox" ' . esc_attr( $disabled ) . ' 
 	                id="wc_new_checkout" 
 	                data-toggle="wc_new_checkout_options" 
 	                class="app_enable" 
 	                name="mo_customer_validation_wc_new_checkout_enable" 
 	                value="1" 
 	                ' . esc_attr( $wc_new_checkout ) . ' />
            <strong>' . esc_html( $form_name ) . '</strong>';

echo '<div  style="border: none;"
			class="notice mo_sms_notice font-normal rounded-smooth bg-blue-50 py-mo-3">
			<h2>WooCommerce is contantly making changes in their recent relases. If you face any issues, contact us at <a style="cursor:pointer;" class="text-green-800 font-semibold" onclick="otpSupportOnClick();">otpsupport@xecurify.com</a>.</h2>
</div>';

echo '		<div class="mo_registration_help_desc" id="wc_new_checkout_options">
				<b>' . esc_html( mo_( 'Choose between Phone or Email Verification' ) ) . '</b>
				<div>
				    <input  type="radio" ' . esc_attr( $disabled ) . ' 
				            id="wc_new_checkout_phone" 
				            class="app_enable" 
				            data-toggle="wc_new_checkout_phone_options"
				            name="mo_customer_validation_wc_new_checkout_type" 
				            value="' . esc_attr( $wc_new_type_phone ) . '"
						    ' . ( esc_attr( $wc_new_checkout_enable_type ) === esc_attr( $wc_new_type_phone ) ? 'checked' : '' ) . ' />
                    <strong>' . esc_html( mo_( 'Enable Phone Verification' ) ) . '</strong>
				</div>
				<div>
				    <input  type="radio" ' . esc_attr( $disabled ) . ' 
				            id="wc_new_checkout_email" 
				            class="app_enable" 
				            name="mo_customer_validation_wc_new_checkout_type" 
				            value="' . esc_attr( $wc_new_type_email ) . '"
						    ' . ( esc_attr( $wc_new_checkout_enable_type ) === esc_attr( $wc_new_type_email ) ? 'checked' : '' ) . ' />
                    <strong>' . esc_html( mo_( 'Enable Email Verification' ) ) . '</strong>
				</div>
			</div>
		</div>';
