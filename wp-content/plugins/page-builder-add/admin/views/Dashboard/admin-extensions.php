<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php 

  if (is_plugin_active( 'page-builder-add-templates-pack-one/page-builder-add-templates-pack-one.php' )  || is_plugin_active('PluginOps-Extensions-Pack/extension-pack.php') ) {
      $templatesOneExtLink = '<button class="ext_cta_installed">'.__( 'Installed', 'page-builder-add' ).'  </button>';
  }else{
    $templatesOneExtLink = '<a href="https://pluginops.com/page-builder/?ref=extensionsPage"> <button class="ext_cta"> '.__( 'Get All Features', 'page-builder-add' ).'</button> </a>';
  }

  if (is_plugin_active( 'page-builder-add-global-row-extension/page-builder-add-global-row.php' )  || is_plugin_active('PluginOps-Extensions-Pack/extension-pack.php') ) {
      $globalRowExtLink = '<button class="ext_cta_installed">'.__( 'Installed', 'page-builder-add' ).'  </button>';
  }else{
    $globalRowExtLink = '<a href="https://pluginops.com/page-builder/?ref=extensionsPage"> <button class="ext_cta"> '.__( 'Get All Features', 'page-builder-add' ).'</button> </a>';
  }

  if (is_plugin_active( 'page-builder-add-export-templates/page-builder-add-export-templates.php' )  || is_plugin_active('PluginOps-Extensions-Pack/extension-pack.php') ) {
      $exportDuplicateExtLink = '<button class="ext_cta_installed">'.__( 'Installed', 'page-builder-add' ).'  </button>';
  }else{
    $exportDuplicateExtLink = '<a href="https://pluginops.com/page-builder/?ref=extensionsPage"> <button class="ext_cta"> '.__( 'Get All Features', 'page-builder-add' ).'</button> </a>';
  }

  if (is_plugin_active( 'page-builder-add-mailchimp-extension/page-builder-add-mailchimp-extension.php' )  || is_plugin_active('PluginOps-Extensions-Pack/extension-pack.php') ) {
      $mailchimpExtLink = '<button class="ext_cta_installed">'.__( 'Installed', 'page-builder-add' ).'  </button>';
  }else{
    $mailchimpExtLink = '<a href="https://pluginops.com/page-builder/?ref=extensionsPage"> <button class="ext_cta"> '.__( 'Get All Features', 'page-builder-add' ).'</button> </a>';
  }

  if (is_plugin_active( 'page-builder-add-embed-anywhere-template-extension/page-builder-add-anywhere-template.php' )  || is_plugin_active('PluginOps-Extensions-Pack/extension-pack.php') ) {
      $anyWhereTemplateExt = '<button class="ext_cta_installed">'.__( 'Installed', 'page-builder-add' ).'  </button>';
  }else{
    $anyWhereTemplateExt = '<a href="https://pluginops.com/page-builder/?ref=extensionsPage"> <button class="ext_cta"> '.__( 'Get All Features', 'page-builder-add' ).'</button> </a>';
  }

  if (is_plugin_active( 'page-builder-add-form-database-extension/page-builder-add-extension.php' )  || is_plugin_active('PluginOps-Extensions-Pack/extension-pack.php') ) {
      $formBuilderDBExt = '<button class="ext_cta_installed">'.__( 'Installed', 'page-builder-add' ).'  </button>';
  }else{
    $formBuilderDBExt = '<a href="https://pluginops.com/page-builder/?ref=extensionsPage"> <button class="ext_cta"> '.__( 'Get All Features', 'page-builder-add' ).'</button> </a>';
  }


?>

<div id="ulpb_dash_container">
  <h2 style="font-size:20px; font-weight: normal;"><?php _e( 'Landing Page Builder Premium Features', 'page-builder-add' ); ?>  </h2>

      <div id="tab1" class="tab active" style="background: #f1f1f1; padding: 30px;">
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/1.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Premium Templates Pack </a> </h3>
          <p>Get beautiful Premium Templates & blocks to speed up your design process. Build your landing page funnels faster & better.</p>

          <?php echo $templatesOneExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container" style="background: #7289f2;"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/4.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Global Rows</a> </h3>
          <p>Save & Reuse same row on multiple pages and make changes without having to edit each page.</p>
          
          <?php echo $globalRowExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/6.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Database Extension </a> </h3>
          <p>With database extension you can save the user data from your forms in database which can be viewed & exported to be used with other services.</p>
          
          <?php echo $formBuilderDBExt; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/2.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Export & Duplicate</a> </h3>
          <p>Export & Duplicate your pages and reuse them on multiple sites or same site, , Easy one click export & import.</p>
          
          <?php echo $exportDuplicateExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/13.png' ?>"> </div>
              <h3> <a href="https://pluginops.com/page-builder?ref='AbTesting'"> A/B Testing </a> </h3>
              <p>With A/B testing features test upto 4 different variants of Landing Pages to find out what and where it converts the most. A/B Testing is highly effective tool to increase leads.</p>
              <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/3.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> MailChimp </a> </h3>
          <p>MailChimp Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/5.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Embed Anywhere </a> </h3>
          <p>Embed Anywhere Extension lets you place your templates/pages anywhere with just a shortcode.</p>
          
          <?php echo $anyWhereTemplateExt; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/7.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Get Response Integration </a> </h3>
          <p>GetResponse Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/9.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Active Campaign Integration </a> </h3>
          <p>Active Campaign Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/8.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Campaign Monitor Integration </a> </h3>
          <p>Campaign Monitor Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/10.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Aweber Integration </a> </h3>
          <p>Aweber Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/11.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> Drip Integration </a> </h3>
          <p>Drip Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
        <div class="pb_ext-card">
          <div class="pb_extImg_container"> <img src="<?php echo ULPB_PLUGIN_URL.'/images/extension-icons/12.png' ?>"> </div>
          <h3> <a href="https://pluginops.com/page-builder/?ref=extensionsPage"> ConvertKit Integration </a> </h3>
          <p>ConvertKit Extension allows you to send your subscribe form and form builder submissions directly to your mailchimp account.</p>
          
          <?php echo $mailchimpExtLink; ?>
        </div>
      </div>
      
<style type="text/css">

  .pb_ext-card{
    display: inline-block;
    max-width:23%;
    min-width: 300px;
    max-height:550px;
    background: #fff;
    border:1px solid #ddd;
    text-align: center;
    margin-right: 1.2%;
    margin-bottom: 60px;
    padding-bottom: 30px;
  }

  .pb_ext-card a {
    text-decoration: none;
  }

  .pb_ext-card .ext_cta{
    border: none;
    padding: 2% 4% 2% 4%;
    font-size: 15px;
    color: #fff;
    background: #FF9800;
    cursor: pointer;
    margin: 1% 0 .5% 0;
    border-radius: 5px;
    font-weight: 500;
    letter-spacing: 2px;
  }

  .pb_ext-card .ext_cta:hover{
    background: #ffb445;
  }

  .pb_ext-card img {
    max-width:40% !important;
  }

  .pb_ext-card p {
    margin: 5px;
  }

  .pb_extImg_container {
    width: 100%;
    background: rgba(109, 150, 255, 1);
  }
  .ext_cta_installed{
    border: 2px solid #FF9800;
    padding: 10px 30px 10px 30px;
    font-size: 17px;
    color: #FF9800;
    background: #ffffff;
    cursor: pointer;
    margin: 10px 0 5px 0;
    border-radius: 5px;
    font-weight: 500;
    letter-spacing: 3px;
  }
  body{
    background: #F3F6F8 !important;
  }
</style>

<script type="text/javascript">
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
</script>