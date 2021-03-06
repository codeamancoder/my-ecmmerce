<!--orta -->
<div id="orta" class="sola">
	<h1 id="sayfa_baslik"><?php echo lang('messages_static_page_customer_services_title'); ?></h1>
		<?php if($this->dx_auth->is_logged_in()) { ?>    
			<div id="mh_altbaslik">
				<?php
					$user_id = $this->dx_auth->get_user_id();
					$user_inf = user_ide_inf($user_id)->row();
					echo strtr(lang('messages_static_page_customer_services_dr_name'), array('{name}' => $user_inf->ide_adi . ' ' . $user_inf->ide_soy));
				?>
			</div>
		<?php } else { ?>
			<div id="mh_altbaslik"><?php echo lang('messages_static_page_customer_services_dr_visitor') ?></div>
		<?php } ?>
		<div id="mh_altbaslik"><span><?php echo lang('messages_static_page_customer_services_information'); ?></span></div>
		<div class="clear"></div>
		<div id="mh_kutu_bg">
		<ul>
			<?php if(!$this->dx_auth->is_logged_in()) { ?>
			<li>
				<ul>
					<li><?php echo lang('messages_static_page_customer_services_membership_title') ?></li>
					<li class="trnc"><a href="javascript:;">» <?php echo lang('messages_static_page_customer_services_membership_free'); ?></a></li>
					<li class="altbaslik"><?php echo lang('messages_static_page_customer_services_membership_free_information'); ?></li>
					<li class="trnc"><a href="<?php echo ssl_url('uye/giris'); ?>">» <?php echo lang('messages_static_page_customer_services_member_login'); ?></a></li>
					<li class="trnc"><a href="<?php echo ssl_url('uye/sifre_hatirlat'); ?>">» <?php echo lang('messages_static_page_customer_services_lost_password'); ?></a></li>
					<li class="altbaslik"><?php echo lang('messages_static_page_customer_services_lost_password_information'); ?></li>
				 </ul>
			</li>
			<?php } else { ?>
			<li>
				<ul>
					<li><?php echo lang('messages_static_page_customer_services_membership_title') ?></li>
					<li class="trnc"><a href="<?php echo ssl_url('uye/bilgi'); ?>">» <?php echo lang('messages_static_page_customer_services_membership_member_information'); ?></a></li>
					<li class="altbaslik"><?php echo lang('messages_static_page_customer_services_membership_member_information2'); ?></li>
					<li class="trnc"><a href="<?php echo ssl_url('uye/fatura'); ?>">» <?php echo lang('messages_static_page_customer_services_membership_billing'); ?></a></li>
					<li class="altbaslik"><?php echo lang('messages_static_page_customer_services_membership_billing_information'); ?></li>
				</ul>
			</li>
			<?php } ?>
			<li>
				<ul>
					<li><?php echo lang('messages_static_page_customer_services_security_title'); ?></li>
					<?php if(show_page('7')) { ?><li class="trnc"><?php echo show_page('7', '', '» ', ''); ?></li><?php } ?>
					<?php if(show_page('2')) { ?><li class="trnc"><?php echo show_page('2', '', '» ', ''); ?></li><?php } ?>
					<?php if(show_page('9')) { ?><li class="trnc"><?php echo show_page('9', '', '» ', ''); ?></li><?php } ?>
				</ul>
			</li>
		</ul>
		<ul>
			<li>
				<ul>
					<li><?php echo lang('messages_static_page_customer_services_payment_title'); ?></li>
					<li class="trnc"><a href="<?php echo site_url('site/odeme_secenekleri'); ?>">» <?php echo lang('messages_static_page_customer_services_payment_payment_options'); ?></a></li>
					<li class="trnc"><a href="<?php echo site_url('site/banka_bilgileri'); ?>">» <?php echo lang('messages_static_page_customer_services_payment_bank_information'); ?></a></li>
					<?php if(show_page('3')) { ?><li class="trnc"><?php echo show_page('3', ' ', '» ', ''); ?></li><?php } ?>
					<?php if(show_page(config('site_ayar_sozlesme_id'))) { ?><li class="trnc"><?php echo show_page(config('site_ayar_sozlesme_id'), '', '» '); ?></li><?php } ?>
				</ul>
			</li>
			<?php if($this->dx_auth->is_logged_in()) { ?>
			<li>
				<ul>
					<li><?php echo lang('messages_static_page_customer_services_order_tracking_title'); ?></li>
					<li class="trnc"><a href="<?php echo ssl_url('uye/siparisler'); ?>">» <?php echo lang('messages_static_page_customer_services_order_tracking'); ?></a></li>
					<li class="altbaslik"><?php echo lang('messages_static_page_customer_services_order_tracking_information'); ?></li>
					<li class="trnc"><a href="<?php echo ssl_url('sepet/goster'); ?>">» <?php echo lang('messages_static_page_customer_services_order_tracking_cart'); ?></a></li>
					<li class="altbaslik"><?php echo lang('messages_static_page_customer_services_order_tracking_cart_information'); ?></li>
				</ul>
			</li>
			<?php } ?>
			<li>
				<ul>
					<li><?php echo lang('messages_static_page_customer_services_order_contact_title'); ?></li>
					<li class="trnc">
						<a href="<?php echo site_url('site/iletisim'); ?>">
							» <?php echo lang('messages_static_page_customer_services_order_contact_information'); ?>
						</a>
					</li>
					<?php if(show_page('5')) { ?>
					<li class="trnc"><?php echo show_page('5', ' ', '» ', ''); ?></li>
					<?php } ?>
					<li class="trnc">
						<a href="<?php echo site_url('site/iletisim'); ?>">
							» <?php echo lang('messages_static_page_customer_services_order_contact_suggest'); ?>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<!--orta son -->