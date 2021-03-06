( function( $ ) { 

$('.SavePage').click(function() {

  var setFrontPage = '';
  var loadWpHead = $('.loadWpHead').attr('isChecked');
  var loadWpFooter = $('.loadWpFooter').attr('isChecked');
  var pageSeoName = $('#title').val();
  var pageLink = $('#editable-post-name-full').html();
  var pageSeoDescription = $('.pageSeoDescription').val();
  var pageSeoKeywords = $('.pageSeoKeywords').val();
  var pageBgImage = $('.pageBgImage').val();
  var pageBgColor = $('.pageBgColor').val();
  var pagePaddingTop = $('.pagePaddingTop').val();
  var pagePaddingBottom = $('.pagePaddingBottom').val();
  var pagePaddingLeft = $('.pagePaddingLeft').val();
  var pagePaddingRight = $('.pagePaddingRight').val(); 
  var pageLogoUrl = $('.pageLogoUrl').val();
  var pageFavIconUrl = $('.pageFavIconUrl').val();
  var VariantB_ID = $('.VariantB_ID').val();

  if (pageSeoName == '') {
    $('#title').val('PluginOps Page  - '+P_ID);
    pageSeoName = $('#title').val();
  }

  var PbPageStatus = $('.PbPageStatus').val();
  var checkBtnClickedTypePublish = $(this).hasClass('publishBtn');
  if (checkBtnClickedTypePublish == true) {
    PbPageStatus = 'publish';
  }
  var checkBtnClickedTypeDraft = $(this).hasClass('draftBtn');
  if (checkBtnClickedTypeDraft == true) {
    PbPageStatus = 'draft';
  }

  var POcustomCSS = PbPOaceEditorCSS.getValue();
  var POcustomJS = PbPOaceEditorJS.getValue();

  var mailchimpListIdHolder = $('.mailchimpListIdHolder').val();
  var mailchimpApiKeyHolder = $('.mailchimpApiKeyHolder').val();



  setFrontPage = "false";
  isChecked = $('.setFrontPage').attr('isChecked');
  if (isChecked == 'true') {
    setFrontPage = "true";
  } else{
    setFrontPage = "false"; 
  }

  if (loadWpHead == 'true') {
    loadWpHead = "true";
  } else{
    loadWpHead = "false"; 
  }

  if (loadWpFooter == 'true') {
    loadWpFooter = "true";
  } else{
    loadWpFooter = "false"; 
  }

  var POPBDefaultsEnable = $('.POPBDefaultsEnable').val();

  var POPB_typefaces =  {
    typefaceHOne:$('.typefaceHOne').val() ,
    typefaceHTwo:$('.typefaceHTwo').val(),
    typefaceParagraph:$('.typefaceParagraph').val(),
    typefaceButton:$('.typefaceButton').val(),
    typefaceAnchorLink:$('.typefaceAnchorLink').val()
  };

  var POPB_typeSizes = {
    typeSizeHOne:$('.typeSizeHOne').val(),
    typeSizeHTwo:$('.typeSizeHTwo').val(),
    typeSizeParagraph:$('.typeSizeParagraph').val(),
    typeSizeButton:$('.typeSizeButton').val(),
    typeSizeAnchorLink:$('.typeSizeAnchorLink').val(),
    typeSizeHOneTablet:$('.typeSizeHOneTablet').val(),
    typeSizeHOneMobile:$('.typeSizeHOneMobile').val(),
    typeSizeHTwoTablet:$('.typeSizeHTwoTablet').val(),
    typeSizeHTwoMobile:$('.typeSizeHTwoMobile').val(),
    typeSizeParagraphTablet:$('.typeSizeParagraphTablet').val(),
    typeSizeParagraphMobile:$('.typeSizeParagraphMobile').val(),
    typeSizeButtonTablet:$('.typeSizeButtonTablet').val(),
    typeSizeButtonMobile:$('.typeSizeButtonMobile').val(),
    typeSizeAnchorLinkTablet:$('.typeSizeAnchorLinkTablet').val(),
    typeSizeAnchorLinkMobile:$('.typeSizeAnchorLinkMobile').val(),
  };





  var pageOps = {
    setFrontPage: setFrontPage,
    loadWpHead:loadWpHead,
    loadWpFooter: loadWpFooter,
    pageBgImage: pageBgImage,
    pageBgColor: pageBgColor,
    pageLink: pageLink,
    pagePadding: {
      pagePaddingTop : pagePaddingTop,
      pagePaddingBottom : pagePaddingBottom,
      pagePaddingLeft : pagePaddingLeft,
      pagePaddingRight : pagePaddingRight,
    },
    pagePaddingTablet: {
      pagePaddingTopTablet : $('.pagePaddingTopTablet').val(),
      pagePaddingBottomTablet : $('.pagePaddingBottomTablet').val(),
      pagePaddingLeftTablet : $('.pagePaddingLeftTablet').val(),
      pagePaddingRightTablet : $('.pagePaddingRightTablet').val(),
    },
    pagePaddingMobile: {
      pagePaddingTopMobile : $('.pagePaddingTopMobile').val(),
      pagePaddingBottomMobile : $('.pagePaddingBottomMobile').val(),
      pagePaddingLeftMobile : $('.pagePaddingLeftMobile').val(),
      pagePaddingRightMobile : $('.pagePaddingRightMobile').val(),
    },
    pageSeoName: pageSeoName,
    pageSeoDescription: pageSeoDescription,
    pageSeoKeywords: pageSeoKeywords,
    pageLogoUrl: pageLogoUrl,
    pageFavIconUrl: pageFavIconUrl,
    MultiVariantTesting: {
      VariantB: $('.VariantB').val(),
      VariantC:$('.VariantC').val(),
      VariantD:$('.VariantD').val(),
    },
    POcustomCSS:POcustomCSS,
    POcustomJS:POcustomJS,
    POPBDefaults: {
      POPBDefaultsEnable : POPBDefaultsEnable,
      POPB_typefaces:POPB_typefaces ,
      POPB_typeSizes: POPB_typeSizes
    },
    bodyBackgroundType:$('.bodyBackgroundType:checked').val(),
    bodyGradient:{
      bodyGradientColorFirst: $('.bodyGradientColorFirst').val(),
      bodyGradientLocationFirst:$('.bodyGradientLocationFirst').val(),
      bodyGradientColorSecond:$('.bodyGradientColorSecond').val(),
      bodyGradientLocationSecond:$('.bodyGradientLocationSecond').val(),
      bodyGradientType:$('.bodyGradientType').val(),
      bodyGradientPosition:$('.bodyGradientPosition').val(),
      bodyGradientAngle:$('.bodyGradientAngle').val(),
    },
    bodyHoverOptions: {
      bodyBgColorHover:$('.bodyBgColorHover').val(),
      bodyBackgroundTypeHover:$('.bodyBackgroundTypeHover:checked').val(),
      bodyHoverTransitionDuration:$('.bodyHoverTransitionDuration').val(),
      bodyGradientHover:{
        bodyGradientColorFirstHover: $('.bodyGradientColorFirstHover').val(),
        bodyGradientLocationFirstHover:$('.bodyGradientLocationFirstHover').val(),
        bodyGradientColorSecondHover:$('.bodyGradientColorSecondHover').val(),
        bodyGradientLocationSecondHover:$('.bodyGradientLocationSecondHover').val(),
        bodyGradientTypeHover:$('.bodyGradientTypeHover').val(),
        bodyGradientPositionHover:$('.bodyGradientPositionHover').val(),
        bodyGradientAngleHover:$('.bodyGradientAngleHover').val(),
      }
    },
    bodyOverlayBackgroundType: $('.bodyOverlayBackgroundType:checked').val(),
    bodyOverlayGradient:{
      bodyOverlayGradientColorFirst: $('.bodyOverlayGradientColorFirst').val(),
      bodyOverlayGradientLocationFirst:$('.bodyOverlayGradientLocationFirst').val(),
      bodyOverlayGradientColorSecond:$('.bodyOverlayGradientColorSecond').val(),
      bodyOverlayGradientLocationSecond:$('.bodyOverlayGradientLocationSecond').val(),
      bodyOverlayGradientType:$('.bodyOverlayGradientType').val(),
      bodyOverlayGradientPosition:$('.bodyOverlayGradientPosition').val(),
      bodyOverlayGradientAngle:$('.bodyOverlayGradientAngle').val(),
    },
    bodyBgOverlayColor:$('.bodyBgOverlayColor').val(),
    bodyBorderType:$('.bodyBorderType').val(),
    bodyBorderWidth:$('.bodyBorderWidth').val(),
    bodyBorderColor:$('.bodyBorderColor').val(),
    bodyBorderRadius:{
      bbrt:$('.bbrt').val(),
      bbrb:$('.bbrb').val(),
      bbrl:$('.bbrl').val(),
      bbrr:$('.bbrr').val(),
    },
  };

  var formMailchimp = {
    listId:mailchimpListIdHolder,
    apiKey:mailchimpApiKeyHolder,
  }

  var newPermalinkUrl = siteURLpb+'/'+pageLink;
  $('#sample-permalink a').attr('href',newPermalinkUrl);

  var isEditorEnabled = $('.pb_fullScreenEditorButton');
  if (isEditorEnabled.hasClass('EditorActive')) {
    displayEditor = 'block';
  } else{
    displayEditor = 'none';
  }
  

  $('#pbWrapper').attr('style','background-image: url("'+pageBgImage+'"); background-size:cover; background-color:'+pageBgColor+'; padding: '+pagePaddingTop+'% '+pagePaddingRight+'% '+pagePaddingBottom+'% '+pagePaddingLeft+'%; display:'+displayEditor+';  ');





        if (POPBDefaultsEnable == 'true') {

          $('#fontLoaderContainer').html('<link rel="stylesheet"href="https://fonts.googleapis.com/css?family='+POPB_typefaces['typefaceHOne']+'|'+POPB_typefaces['typefaceHTwo']+'|'+POPB_typefaces['typefaceParagraph']+'|'+POPB_typefaces['typefaceButton']+'|'+POPB_typefaces['typefaceAnchorLink']+' ">');

          var POPBGlobalStylesTag = '\n'+

            '#pbWrapper h1 { font-family:'+POPB_typefaces['typefaceHOne'].replace(/\+/g, ' ')+'; font-size:'+POPB_typeSizes['typeSizeHOne']+'px; }  \n'+

            '#pbWrapper h2 { font-family:'+POPB_typefaces['typefaceHTwo'].replace(/\+/g, ' ')+'; font-size:'+POPB_typeSizes['typeSizeHTwo']+'px; }  \n'+

            '#pbWrapper p { font-family:'+POPB_typefaces['typefaceParagraph'].replace(/\+/g, ' ')+'; font-size:'+POPB_typeSizes['typeSizeParagraph']+'px; }  \n'+

            '#pbWrapper button { font-family:'+POPB_typefaces['typefaceButton'].replace(/\+/g, ' ')+'; font-size:'+POPB_typeSizes['typeSizeButton']+'px; }  \n'+
            
            '#pbWrapper a { font-family:'+POPB_typefaces['typefaceAnchorLink'].replace(/\+/g, ' ')+'; font-size:'+POPB_typeSizes['typeSizeAnchorLink']+'px; } \n';

          $('#POPBGlobalStylesTag').html(POPBGlobalStylesTag);
        } else{
          $('#POPBGlobalStylesTag').html('');
        }


  //console.log($('#container').parent('#tab1'));
  $('.pb_loader_container').slideDown(200);
  var PageStatus = pageBuilderApp.PageBuilderModel.get('pageStatus');
  pageBuilderApp.PageBuilderModel.set( 'pageID', P_ID);
  pageBuilderApp.PageBuilderModel.set( 'pageOptions', pageOps);
  pageBuilderApp.PageBuilderModel.set('pageStatus',PbPageStatus);
  pageBuilderApp.PageBuilderModel.set( 'formMailchimp', formMailchimp);
  pageBuilderApp.PageBuilderModel.set( 'Rows', pageBuilderApp.rowList.models );

  pageBuilderApp.PageBuilderModel.save({ wait:true }).success(function(response){

    setTimeout(function(){
      $('.pb_loader_container').slideUp(200);
      if (PageStatus === 'publish' || PageStatus === 'draft' || PageStatus === 'private') {

      }else{
        window.location.href = admURL+'post.php?post='+P_ID+'&action=edit'; 
      }
    }, 1000);
    console.log('Saved');

  }).error(function(response){

    alert('Page Not Saved - Some Error Occurred! ');
    $('.pb_loader_container').slideUp(200);

  });

  

});

/*
$(document).ready(function(){

  setInterval(function(){

    var isChagesMade = $('.isChagesMade').val();

    if (isChagesMade == 'true') {
      
      pageBuilderApp.PageBuilderModel.set( 'Rows', pageBuilderApp.rowList.models );
      pageBuilderApp.PageBuilderModel.save({ wait:true }).success(function(response){
        console.log('Saved');
      }).error(function(response){
        console.log('Page Not Saved - Some Error Occurred! ');
      });
    } 

     $('.isChagesMade').val('false');
  }, 15000);

});
*/

}( jQuery ) );