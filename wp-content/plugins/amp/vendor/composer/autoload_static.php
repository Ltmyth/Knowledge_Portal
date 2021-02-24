<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74ae9b1e5d841728c62963ae6b648805
{
    public static $files = array (
        '6f5653f9af3eab04254ad2c7f20515c8' => __DIR__ . '/../..' . '/back-compat/back-compat.php',
        'e342e4765b5e04c0c6644a8c1abebf6e' => __DIR__ . '/../..' . '/includes/amp-helper-functions.php',
        'e277911826ceb1847d1fe71d1b8266f6' => __DIR__ . '/../..' . '/includes/admin/functions.php',
        'e86208615ad8114756c54c34df57379d' => __DIR__ . '/../..' . '/includes/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WillWashburn\\' => 13,
        ),
        'S' => 
        array (
            'Sabberworm\\CSS\\' => 15,
        ),
        'A' => 
        array (
            'AmpProject\\Optimizer\\' => 21,
            'AmpProject\\AmpWP\\' => 17,
            'AmpProject\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WillWashburn\\' => 
        array (
            0 => __DIR__ . '/..' . '/willwashburn/stream/src',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS',
        ),
        'AmpProject\\Optimizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/ampproject/optimizer/src',
        ),
        'AmpProject\\AmpWP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'AmpProject\\' => 
        array (
            0 => __DIR__ . '/..' . '/ampproject/common/src',
        ),
    );

    public static $classMap = array (
        'AMP_Accessibility_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-accessibility-sanitizer.php',
        'AMP_Admin_Pointer' => __DIR__ . '/../..' . '/includes/admin/class-amp-admin-pointer.php',
        'AMP_Admin_Pointers' => __DIR__ . '/../..' . '/includes/admin/class-amp-admin-pointers.php',
        'AMP_Allowed_Tags_Generated' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-allowed-tags-generated.php',
        'AMP_Audio_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-audio-sanitizer.php',
        'AMP_Autoloader' => __DIR__ . '/../..' . '/includes/class-amp-autoloader.php',
        'AMP_Base_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-base-embed-handler.php',
        'AMP_Base_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-base-sanitizer.php',
        'AMP_Block_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-block-sanitizer.php',
        'AMP_CLI_Namespace' => __DIR__ . '/../..' . '/includes/cli/class-amp-cli-namespace.php',
        'AMP_CLI_Validation_Command' => __DIR__ . '/../..' . '/includes/cli/class-amp-cli-validation-command.php',
        'AMP_Comment_Walker' => __DIR__ . '/../..' . '/includes/class-amp-comment-walker.php',
        'AMP_Comments_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-comments-sanitizer.php',
        'AMP_Content' => __DIR__ . '/../..' . '/includes/templates/class-amp-content.php',
        'AMP_Content_Sanitizer' => __DIR__ . '/../..' . '/includes/templates/class-amp-content-sanitizer.php',
        'AMP_Core_Block_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-core-block-handler.php',
        'AMP_Core_Theme_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-core-theme-sanitizer.php',
        'AMP_Crowdsignal_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-crowdsignal-embed-handler.php',
        'AMP_Customizer_Design_Settings' => __DIR__ . '/../..' . '/includes/settings/class-amp-customizer-design-settings.php',
        'AMP_Customizer_Settings' => __DIR__ . '/../..' . '/includes/settings/class-amp-customizer-settings.php',
        'AMP_DOM_Utils' => __DIR__ . '/../..' . '/includes/utils/class-amp-dom-utils.php',
        'AMP_DailyMotion_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-dailymotion-embed-handler.php',
        'AMP_Dev_Mode_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-dev-mode-sanitizer.php',
        'AMP_Editor_Blocks' => __DIR__ . '/../..' . '/includes/admin/class-amp-editor-blocks.php',
        'AMP_Embed_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-embed-sanitizer.php',
        'AMP_Facebook_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-facebook-embed-handler.php',
        'AMP_Form_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-form-sanitizer.php',
        'AMP_Gallery_Block_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-gallery-block-sanitizer.php',
        'AMP_Gallery_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-gallery-embed-handler.php',
        'AMP_Gfycat_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-gfycat-embed-handler.php',
        'AMP_HTML_Utils' => __DIR__ . '/../..' . '/includes/utils/class-amp-html-utils.php',
        'AMP_HTTP' => __DIR__ . '/../..' . '/includes/class-amp-http.php',
        'AMP_Iframe_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-iframe-sanitizer.php',
        'AMP_Image_Dimension_Extractor' => __DIR__ . '/../..' . '/includes/utils/class-amp-image-dimension-extractor.php',
        'AMP_Img_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-img-sanitizer.php',
        'AMP_Imgur_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-imgur-embed-handler.php',
        'AMP_Instagram_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-instagram-embed-handler.php',
        'AMP_Issuu_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-issuu-embed-handler.php',
        'AMP_Layout_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-layout-sanitizer.php',
        'AMP_Link_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-link-sanitizer.php',
        'AMP_Meetup_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-meetup-embed-handler.php',
        'AMP_Meta_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-meta-sanitizer.php',
        'AMP_Nav_Menu_Dropdown_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-nav-menu-dropdown-sanitizer.php',
        'AMP_Nav_Menu_Toggle_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-nav-menu-toggle-sanitizer.php',
        'AMP_Noscript_Fallback' => __DIR__ . '/../..' . '/includes/sanitizers/trait-amp-noscript-fallback.php',
        'AMP_O2_Player_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-o2-player-sanitizer.php',
        'AMP_Options_Manager' => __DIR__ . '/../..' . '/includes/options/class-amp-options-manager.php',
        'AMP_Pinterest_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-pinterest-embed-handler.php',
        'AMP_Playbuzz_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-playbuzz-sanitizer.php',
        'AMP_Playlist_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-playlist-embed-handler.php',
        'AMP_Post_Meta_Box' => __DIR__ . '/../..' . '/includes/admin/class-amp-post-meta-box.php',
        'AMP_Post_Template' => __DIR__ . '/../..' . '/includes/templates/class-amp-post-template.php',
        'AMP_Post_Type_Support' => __DIR__ . '/../..' . '/includes/class-amp-post-type-support.php',
        'AMP_Reader_Theme_REST_Controller' => __DIR__ . '/../..' . '/includes/options/class-amp-reader-theme-rest-controller.php',
        'AMP_Reddit_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-reddit-embed-handler.php',
        'AMP_Rule_Spec' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-rule-spec.php',
        'AMP_Scribd_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-scribd-embed-handler.php',
        'AMP_Script_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-script-sanitizer.php',
        'AMP_Service_Worker' => __DIR__ . '/../..' . '/includes/class-amp-service-worker.php',
        'AMP_SoundCloud_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-soundcloud-embed-handler.php',
        'AMP_Srcset_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-srcset-sanitizer.php',
        'AMP_String_Utils' => __DIR__ . '/../..' . '/includes/utils/class-amp-string-utils.php',
        'AMP_Style_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-style-sanitizer.php',
        'AMP_Tag_And_Attribute_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-tag-and-attribute-sanitizer.php',
        'AMP_Template_Customizer' => __DIR__ . '/../..' . '/includes/admin/class-amp-template-customizer.php',
        'AMP_Theme_Support' => __DIR__ . '/../..' . '/includes/class-amp-theme-support.php',
        'AMP_TikTok_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-tiktok-embed-handler.php',
        'AMP_Tumblr_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-tumblr-embed-handler.php',
        'AMP_Twitter_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-twitter-embed-handler.php',
        'AMP_Validated_URL_Post_Type' => __DIR__ . '/../..' . '/includes/validation/class-amp-validated-url-post-type.php',
        'AMP_Validation_Callback_Wrapper' => __DIR__ . '/../..' . '/includes/validation/class-amp-validation-callback-wrapper.php',
        'AMP_Validation_Error_Taxonomy' => __DIR__ . '/../..' . '/includes/validation/class-amp-validation-error-taxonomy.php',
        'AMP_Validation_Manager' => __DIR__ . '/../..' . '/includes/validation/class-amp-validation-manager.php',
        'AMP_Video_Sanitizer' => __DIR__ . '/../..' . '/includes/sanitizers/class-amp-video-sanitizer.php',
        'AMP_Vimeo_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-vimeo-embed-handler.php',
        'AMP_Widget_Archives' => __DIR__ . '/../..' . '/includes/widgets/class-amp-widget-archives.php',
        'AMP_Widget_Categories' => __DIR__ . '/../..' . '/includes/widgets/class-amp-widget-categories.php',
        'AMP_Widget_Text' => __DIR__ . '/../..' . '/includes/widgets/class-amp-widget-text.php',
        'AMP_WordPress_TV_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-wordpress-tv-embed-handler.php',
        'AMP_YouTube_Embed_Handler' => __DIR__ . '/../..' . '/includes/embeds/class-amp-youtube-embed-handler.php',
        'AmpProject\\Amp' => __DIR__ . '/..' . '/ampproject/common/src/Amp.php',
        'AmpProject\\AmpWP\\Admin\\AnalyticsOptionsSubmenu' => __DIR__ . '/../..' . '/src/Admin/AnalyticsOptionsSubmenu.php',
        'AmpProject\\AmpWP\\Admin\\GoogleFonts' => __DIR__ . '/../..' . '/src/Admin/GoogleFonts.php',
        'AmpProject\\AmpWP\\Admin\\OnboardingWizardSubmenu' => __DIR__ . '/../..' . '/src/Admin/OnboardingWizardSubmenu.php',
        'AmpProject\\AmpWP\\Admin\\OnboardingWizardSubmenuPage' => __DIR__ . '/../..' . '/src/Admin/OnboardingWizardSubmenuPage.php',
        'AmpProject\\AmpWP\\Admin\\OptionsMenu' => __DIR__ . '/../..' . '/src/Admin/OptionsMenu.php',
        'AmpProject\\AmpWP\\Admin\\PluginActivationNotice' => __DIR__ . '/../..' . '/src/Admin/PluginActivationNotice.php',
        'AmpProject\\AmpWP\\Admin\\Polyfills' => __DIR__ . '/../..' . '/src/Admin/Polyfills.php',
        'AmpProject\\AmpWP\\Admin\\RESTPreloader' => __DIR__ . '/../..' . '/src/Admin/RESTPreloader.php',
        'AmpProject\\AmpWP\\Admin\\ReaderThemes' => __DIR__ . '/../..' . '/src/Admin/ReaderThemes.php',
        'AmpProject\\AmpWP\\Admin\\ReenableCssTransientCachingAjaxAction' => __DIR__ . '/../..' . '/src/Admin/ReenableCssTransientCachingAjaxAction.php',
        'AmpProject\\AmpWP\\Admin\\SiteHealth' => __DIR__ . '/../..' . '/src/Admin/SiteHealth.php',
        'AmpProject\\AmpWP\\AmpSlugCustomizationWatcher' => __DIR__ . '/../..' . '/src/AmpSlugCustomizationWatcher.php',
        'AmpProject\\AmpWP\\AmpWpPlugin' => __DIR__ . '/../..' . '/src/AmpWpPlugin.php',
        'AmpProject\\AmpWP\\AmpWpPluginFactory' => __DIR__ . '/../..' . '/src/AmpWpPluginFactory.php',
        'AmpProject\\AmpWP\\BackgroundTask\\CronBasedBackgroundTask' => __DIR__ . '/../..' . '/src/BackgroundTask/CronBasedBackgroundTask.php',
        'AmpProject\\AmpWP\\BackgroundTask\\MonitorCssTransientCaching' => __DIR__ . '/../..' . '/src/BackgroundTask/MonitorCssTransientCaching.php',
        'AmpProject\\AmpWP\\BackgroundTask\\ValidatedUrlStylesheetDataGarbageCollection' => __DIR__ . '/../..' . '/src/BackgroundTask/ValidatedUrlStylesheetDataGarbageCollection.php',
        'AmpProject\\AmpWP\\Component\\CaptionedSlide' => __DIR__ . '/../..' . '/src/Component/CaptionedSlide.php',
        'AmpProject\\AmpWP\\Component\\Carousel' => __DIR__ . '/../..' . '/src/Component/Carousel.php',
        'AmpProject\\AmpWP\\Component\\HasCaption' => __DIR__ . '/../..' . '/src/Component/HasCaption.php',
        'AmpProject\\AmpWP\\ConfigurationArgument' => __DIR__ . '/../..' . '/src/ConfigurationArgument.php',
        'AmpProject\\AmpWP\\DevTools\\CallbackReflection' => __DIR__ . '/../..' . '/src/DevTools/CallbackReflection.php',
        'AmpProject\\AmpWP\\DevTools\\ErrorPage' => __DIR__ . '/../..' . '/src/DevTools/ErrorPage.php',
        'AmpProject\\AmpWP\\DevTools\\FileReflection' => __DIR__ . '/../..' . '/src/DevTools/FileReflection.php',
        'AmpProject\\AmpWP\\DevTools\\LikelyCulpritDetector' => __DIR__ . '/../..' . '/src/DevTools/LikelyCulpritDetector.php',
        'AmpProject\\AmpWP\\DevTools\\UserAccess' => __DIR__ . '/../..' . '/src/DevTools/UserAccess.php',
        'AmpProject\\AmpWP\\Dom\\ElementList' => __DIR__ . '/../..' . '/src/Dom/ElementList.php',
        'AmpProject\\AmpWP\\Embed\\HandlesGalleryEmbed' => __DIR__ . '/../..' . '/src/Embed/HandlesGalleryEmbed.php',
        'AmpProject\\AmpWP\\Exception\\AmpWpException' => __DIR__ . '/../..' . '/src/Exception/AmpWpException.php',
        'AmpProject\\AmpWP\\Exception\\FailedToMakeInstance' => __DIR__ . '/../..' . '/src/Exception/FailedToMakeInstance.php',
        'AmpProject\\AmpWP\\Exception\\InvalidEventProperties' => __DIR__ . '/../..' . '/src/Exception/InvalidEventProperties.php',
        'AmpProject\\AmpWP\\Exception\\InvalidService' => __DIR__ . '/../..' . '/src/Exception/InvalidService.php',
        'AmpProject\\AmpWP\\Exception\\InvalidStopwatchEvent' => __DIR__ . '/../..' . '/src/Exception/InvalidStopwatchEvent.php',
        'AmpProject\\AmpWP\\ExtraThemeAndPluginHeaders' => __DIR__ . '/../..' . '/src/ExtraThemeAndPluginHeaders.php',
        'AmpProject\\AmpWP\\Icon' => __DIR__ . '/../..' . '/src/Icon.php',
        'AmpProject\\AmpWP\\Infrastructure\\Activateable' => __DIR__ . '/../..' . '/src/Infrastructure/Activateable.php',
        'AmpProject\\AmpWP\\Infrastructure\\Conditional' => __DIR__ . '/../..' . '/src/Infrastructure/Conditional.php',
        'AmpProject\\AmpWP\\Infrastructure\\Deactivateable' => __DIR__ . '/../..' . '/src/Infrastructure/Deactivateable.php',
        'AmpProject\\AmpWP\\Infrastructure\\Delayed' => __DIR__ . '/../..' . '/src/Infrastructure/Delayed.php',
        'AmpProject\\AmpWP\\Infrastructure\\Injector' => __DIR__ . '/../..' . '/src/Infrastructure/Injector.php',
        'AmpProject\\AmpWP\\Infrastructure\\Injector\\FallbackInstantiator' => __DIR__ . '/../..' . '/src/Infrastructure/Injector/FallbackInstantiator.php',
        'AmpProject\\AmpWP\\Infrastructure\\Injector\\InjectionChain' => __DIR__ . '/../..' . '/src/Infrastructure/Injector/InjectionChain.php',
        'AmpProject\\AmpWP\\Infrastructure\\Injector\\SimpleInjector' => __DIR__ . '/../..' . '/src/Infrastructure/Injector/SimpleInjector.php',
        'AmpProject\\AmpWP\\Infrastructure\\Instantiator' => __DIR__ . '/../..' . '/src/Infrastructure/Instantiator.php',
        'AmpProject\\AmpWP\\Infrastructure\\Plugin' => __DIR__ . '/../..' . '/src/Infrastructure/Plugin.php',
        'AmpProject\\AmpWP\\Infrastructure\\Registerable' => __DIR__ . '/../..' . '/src/Infrastructure/Registerable.php',
        'AmpProject\\AmpWP\\Infrastructure\\Service' => __DIR__ . '/../..' . '/src/Infrastructure/Service.php',
        'AmpProject\\AmpWP\\Infrastructure\\ServiceBasedPlugin' => __DIR__ . '/../..' . '/src/Infrastructure/ServiceBasedPlugin.php',
        'AmpProject\\AmpWP\\Infrastructure\\ServiceContainer' => __DIR__ . '/../..' . '/src/Infrastructure/ServiceContainer.php',
        'AmpProject\\AmpWP\\Infrastructure\\ServiceContainer\\LazilyInstantiatedService' => __DIR__ . '/../..' . '/src/Infrastructure/ServiceContainer/LazilyInstantiatedService.php',
        'AmpProject\\AmpWP\\Infrastructure\\ServiceContainer\\SimpleServiceContainer' => __DIR__ . '/../..' . '/src/Infrastructure/ServiceContainer/SimpleServiceContainer.php',
        'AmpProject\\AmpWP\\Instrumentation\\Event' => __DIR__ . '/../..' . '/src/Instrumentation/Event.php',
        'AmpProject\\AmpWP\\Instrumentation\\EventWithDuration' => __DIR__ . '/../..' . '/src/Instrumentation/EventWithDuration.php',
        'AmpProject\\AmpWP\\Instrumentation\\ServerTiming' => __DIR__ . '/../..' . '/src/Instrumentation/ServerTiming.php',
        'AmpProject\\AmpWP\\Instrumentation\\StopWatch' => __DIR__ . '/../..' . '/src/Instrumentation/StopWatch.php',
        'AmpProject\\AmpWP\\Instrumentation\\StopWatchEvent' => __DIR__ . '/../..' . '/src/Instrumentation/StopWatchEvent.php',
        'AmpProject\\AmpWP\\MobileRedirection' => __DIR__ . '/../..' . '/src/MobileRedirection.php',
        'AmpProject\\AmpWP\\ObsoleteBlockAttributeRemover' => __DIR__ . '/../..' . '/src/ObsoleteBlockAttributeRemover.php',
        'AmpProject\\AmpWP\\Option' => __DIR__ . '/../..' . '/src/Option.php',
        'AmpProject\\AmpWP\\OptionsRESTController' => __DIR__ . '/../..' . '/src/OptionsRESTController.php',
        'AmpProject\\AmpWP\\PluginRegistry' => __DIR__ . '/../..' . '/src/PluginRegistry.php',
        'AmpProject\\AmpWP\\PluginSuppression' => __DIR__ . '/../..' . '/src/PluginSuppression.php',
        'AmpProject\\AmpWP\\QueryVar' => __DIR__ . '/../..' . '/src/QueryVar.php',
        'AmpProject\\AmpWP\\ReaderThemeLoader' => __DIR__ . '/../..' . '/src/ReaderThemeLoader.php',
        'AmpProject\\AmpWP\\RemoteRequest\\CachedRemoteGetRequest' => __DIR__ . '/../..' . '/src/RemoteRequest/CachedRemoteGetRequest.php',
        'AmpProject\\AmpWP\\RemoteRequest\\CachedResponse' => __DIR__ . '/../..' . '/src/RemoteRequest/CachedResponse.php',
        'AmpProject\\AmpWP\\RemoteRequest\\WpHttpRemoteGetRequest' => __DIR__ . '/../..' . '/src/RemoteRequest/WpHttpRemoteGetRequest.php',
        'AmpProject\\AmpWP\\Services' => __DIR__ . '/../..' . '/src/Services.php',
        'AmpProject\\AmpWP\\Transformer\\AmpSchemaOrgMetadata' => __DIR__ . '/../..' . '/src/Transformer/AmpSchemaOrgMetadata.php',
        'AmpProject\\AmpWP\\Transformer\\AmpSchemaOrgMetadataConfiguration' => __DIR__ . '/../..' . '/src/Transformer/AmpSchemaOrgMetadataConfiguration.php',
        'AmpProject\\Attribute' => __DIR__ . '/..' . '/ampproject/common/src/Attribute.php',
        'AmpProject\\CssLength' => __DIR__ . '/..' . '/ampproject/common/src/CssLength.php',
        'AmpProject\\DevMode' => __DIR__ . '/..' . '/ampproject/common/src/DevMode.php',
        'AmpProject\\Dom\\CssByteCountCalculator' => __DIR__ . '/..' . '/ampproject/common/src/Dom/CssByteCountCalculator.php',
        'AmpProject\\Dom\\Document' => __DIR__ . '/..' . '/ampproject/common/src/Dom/Document.php',
        'AmpProject\\Exception\\AmpException' => __DIR__ . '/..' . '/ampproject/common/src/Exception/AmpException.php',
        'AmpProject\\Exception\\FailedRemoteRequest' => __DIR__ . '/..' . '/ampproject/common/src/Exception/FailedRemoteRequest.php',
        'AmpProject\\Exception\\FailedToGetCachedResponse' => __DIR__ . '/..' . '/ampproject/common/src/Exception/FailedToGetCachedResponse.php',
        'AmpProject\\Exception\\FailedToGetFromRemoteUrl' => __DIR__ . '/..' . '/ampproject/common/src/Exception/FailedToGetFromRemoteUrl.php',
        'AmpProject\\Extension' => __DIR__ . '/..' . '/ampproject/common/src/Extension.php',
        'AmpProject\\Layout' => __DIR__ . '/..' . '/ampproject/common/src/Layout.php',
        'AmpProject\\Optimizer\\Configuration' => __DIR__ . '/..' . '/ampproject/optimizer/src/Configuration.php',
        'AmpProject\\Optimizer\\Configuration\\AmpRuntimeCssConfiguration' => __DIR__ . '/..' . '/ampproject/optimizer/src/Configuration/AmpRuntimeCssConfiguration.php',
        'AmpProject\\Optimizer\\Configuration\\BaseTransformerConfiguration' => __DIR__ . '/..' . '/ampproject/optimizer/src/Configuration/BaseTransformerConfiguration.php',
        'AmpProject\\Optimizer\\Configuration\\TransformedIdentifierConfiguration' => __DIR__ . '/..' . '/ampproject/optimizer/src/Configuration/TransformedIdentifierConfiguration.php',
        'AmpProject\\Optimizer\\CssRule' => __DIR__ . '/..' . '/ampproject/optimizer/src/CssRule.php',
        'AmpProject\\Optimizer\\CssRules' => __DIR__ . '/..' . '/ampproject/optimizer/src/CssRules.php',
        'AmpProject\\Optimizer\\Error' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error.php',
        'AmpProject\\Optimizer\\ErrorCollection' => __DIR__ . '/..' . '/ampproject/optimizer/src/ErrorCollection.php',
        'AmpProject\\Optimizer\\Error\\CannotInlineRuntimeCss' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error/CannotInlineRuntimeCss.php',
        'AmpProject\\Optimizer\\Error\\CannotPerformServerSideRendering' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error/CannotPerformServerSideRendering.php',
        'AmpProject\\Optimizer\\Error\\CannotRemoveBoilerplate' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error/CannotRemoveBoilerplate.php',
        'AmpProject\\Optimizer\\Error\\ElementDump' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error/ElementDump.php',
        'AmpProject\\Optimizer\\Error\\ErrorProperties' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error/ErrorProperties.php',
        'AmpProject\\Optimizer\\Error\\UnknownError' => __DIR__ . '/..' . '/ampproject/optimizer/src/Error/UnknownError.php',
        'AmpProject\\Optimizer\\Exception\\AmpOptimizerException' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/AmpOptimizerException.php',
        'AmpProject\\Optimizer\\Exception\\InvalidArgument' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/InvalidArgument.php',
        'AmpProject\\Optimizer\\Exception\\InvalidConfigurationKey' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/InvalidConfigurationKey.php',
        'AmpProject\\Optimizer\\Exception\\InvalidConfigurationValue' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/InvalidConfigurationValue.php',
        'AmpProject\\Optimizer\\Exception\\InvalidHtmlAttribute' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/InvalidHtmlAttribute.php',
        'AmpProject\\Optimizer\\Exception\\UnknownConfigurationClass' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/UnknownConfigurationClass.php',
        'AmpProject\\Optimizer\\Exception\\UnknownConfigurationKey' => __DIR__ . '/..' . '/ampproject/optimizer/src/Exception/UnknownConfigurationKey.php',
        'AmpProject\\Optimizer\\LocalFallback' => __DIR__ . '/..' . '/ampproject/optimizer/src/LocalFallback.php',
        'AmpProject\\Optimizer\\TransformationEngine' => __DIR__ . '/..' . '/ampproject/optimizer/src/TransformationEngine.php',
        'AmpProject\\Optimizer\\Transformer' => __DIR__ . '/..' . '/ampproject/optimizer/src/Transformer.php',
        'AmpProject\\Optimizer\\TransformerConfiguration' => __DIR__ . '/..' . '/ampproject/optimizer/src/TransformerConfiguration.php',
        'AmpProject\\Optimizer\\Transformer\\AmpBoilerplate' => __DIR__ . '/..' . '/ampproject/optimizer/src/Transformer/AmpBoilerplate.php',
        'AmpProject\\Optimizer\\Transformer\\AmpRuntimeCss' => __DIR__ . '/..' . '/ampproject/optimizer/src/Transformer/AmpRuntimeCss.php',
        'AmpProject\\Optimizer\\Transformer\\ReorderHead' => __DIR__ . '/..' . '/ampproject/optimizer/src/Transformer/ReorderHead.php',
        'AmpProject\\Optimizer\\Transformer\\ServerSideRendering' => __DIR__ . '/..' . '/ampproject/optimizer/src/Transformer/ServerSideRendering.php',
        'AmpProject\\Optimizer\\Transformer\\TransformedIdentifier' => __DIR__ . '/..' . '/ampproject/optimizer/src/Transformer/TransformedIdentifier.php',
        'AmpProject\\RemoteGetRequest' => __DIR__ . '/..' . '/ampproject/common/src/RemoteGetRequest.php',
        'AmpProject\\RemoteRequest\\CurlRemoteGetRequest' => __DIR__ . '/..' . '/ampproject/common/src/RemoteRequest/CurlRemoteGetRequest.php',
        'AmpProject\\RemoteRequest\\FallbackRemoteGetRequest' => __DIR__ . '/..' . '/ampproject/common/src/RemoteRequest/FallbackRemoteGetRequest.php',
        'AmpProject\\RemoteRequest\\FilesystemRemoteGetRequest' => __DIR__ . '/..' . '/ampproject/common/src/RemoteRequest/FilesystemRemoteGetRequest.php',
        'AmpProject\\RemoteRequest\\RemoteGetRequestResponse' => __DIR__ . '/..' . '/ampproject/common/src/RemoteRequest/RemoteGetRequestResponse.php',
        'AmpProject\\RemoteRequest\\StubbedRemoteGetRequest' => __DIR__ . '/..' . '/ampproject/common/src/RemoteRequest/StubbedRemoteGetRequest.php',
        'AmpProject\\Response' => __DIR__ . '/..' . '/ampproject/common/src/Response.php',
        'AmpProject\\Role' => __DIR__ . '/..' . '/ampproject/common/src/Role.php',
        'AmpProject\\RuntimeVersion' => __DIR__ . '/..' . '/ampproject/common/src/RuntimeVersion.php',
        'AmpProject\\Tag' => __DIR__ . '/..' . '/ampproject/common/src/Tag.php',
        'FasterImage\\Exception\\InvalidImageException' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/Exception/InvalidImageException.php',
        'FasterImage\\ExifParser' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/ExifParser.php',
        'FasterImage\\FasterImage' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/FasterImage.php',
        'FasterImage\\ImageParser' => __DIR__ . '/..' . '/fasterimage/fasterimage/src/FasterImage/ImageParser.php',
        'JakubOnderka\\PhpParallelLint\\Application' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Application.php',
        'JakubOnderka\\PhpParallelLint\\ArrayIterator' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Settings.php',
        'JakubOnderka\\PhpParallelLint\\Blame' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\CheckstyleOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\ConsoleWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Error' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\ErrorFormatter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/ErrorFormatter.php',
        'JakubOnderka\\PhpParallelLint\\Exception' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\FileWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\IWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\InvalidArgumentException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\JsonOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Manager' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Manager.php',
        'JakubOnderka\\PhpParallelLint\\MultipleWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\NotExistsPathException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NullWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Output' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\ParallelLint' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/ParallelLint.php',
        'JakubOnderka\\PhpParallelLint\\Process\\GitBlameProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/GitBlameProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\LintProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/LintProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\PhpExecutable' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/PhpExecutable.php',
        'JakubOnderka\\PhpParallelLint\\Process\\PhpProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/PhpProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\Process' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/Process.php',
        'JakubOnderka\\PhpParallelLint\\Process\\SkipLintProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/SkipLintProcess.php',
        'JakubOnderka\\PhpParallelLint\\RecursiveDirectoryFilterIterator' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Manager.php',
        'JakubOnderka\\PhpParallelLint\\Result' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Result.php',
        'JakubOnderka\\PhpParallelLint\\RunTimeException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\Settings' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Settings.php',
        'JakubOnderka\\PhpParallelLint\\SyntaxError' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\TextOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\TextOutputColored' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'Sabberworm\\CSS\\CSSList\\AtRuleBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/AtRuleBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSBlockList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/CSSBlockList.php',
        'Sabberworm\\CSS\\CSSList\\CSSList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/CSSList.php',
        'Sabberworm\\CSS\\CSSList\\Document' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/Document.php',
        'Sabberworm\\CSS\\CSSList\\KeyFrame' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/CSSList/KeyFrame.php',
        'Sabberworm\\CSS\\Comment\\Comment' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Comment/Comment.php',
        'Sabberworm\\CSS\\Comment\\Commentable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Comment/Commentable.php',
        'Sabberworm\\CSS\\OutputFormat' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/OutputFormat.php',
        'Sabberworm\\CSS\\OutputFormatter' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/OutputFormat.php',
        'Sabberworm\\CSS\\Parser' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parser.php',
        'Sabberworm\\CSS\\Parsing\\OutputException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/OutputException.php',
        'Sabberworm\\CSS\\Parsing\\ParserState' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/ParserState.php',
        'Sabberworm\\CSS\\Parsing\\SourceException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/SourceException.php',
        'Sabberworm\\CSS\\Parsing\\UnexpectedEOFException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/UnexpectedEOFException.php',
        'Sabberworm\\CSS\\Parsing\\UnexpectedTokenException' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Parsing/UnexpectedTokenException.php',
        'Sabberworm\\CSS\\Property\\AtRule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/AtRule.php',
        'Sabberworm\\CSS\\Property\\CSSNamespace' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/CSSNamespace.php',
        'Sabberworm\\CSS\\Property\\Charset' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Charset.php',
        'Sabberworm\\CSS\\Property\\Import' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Import.php',
        'Sabberworm\\CSS\\Property\\KeyframeSelector' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/KeyframeSelector.php',
        'Sabberworm\\CSS\\Property\\Selector' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Property/Selector.php',
        'Sabberworm\\CSS\\Renderable' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Renderable.php',
        'Sabberworm\\CSS\\RuleSet\\AtRuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/AtRuleSet.php',
        'Sabberworm\\CSS\\RuleSet\\DeclarationBlock' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/DeclarationBlock.php',
        'Sabberworm\\CSS\\RuleSet\\RuleSet' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/RuleSet/RuleSet.php',
        'Sabberworm\\CSS\\Rule\\Rule' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Rule/Rule.php',
        'Sabberworm\\CSS\\Settings' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Settings.php',
        'Sabberworm\\CSS\\Value\\CSSFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CSSFunction.php',
        'Sabberworm\\CSS\\Value\\CSSString' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CSSString.php',
        'Sabberworm\\CSS\\Value\\CalcFunction' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CalcFunction.php',
        'Sabberworm\\CSS\\Value\\CalcRuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/CalcRuleValueList.php',
        'Sabberworm\\CSS\\Value\\Color' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Color.php',
        'Sabberworm\\CSS\\Value\\LineName' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/LineName.php',
        'Sabberworm\\CSS\\Value\\PrimitiveValue' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/PrimitiveValue.php',
        'Sabberworm\\CSS\\Value\\RuleValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/RuleValueList.php',
        'Sabberworm\\CSS\\Value\\Size' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Size.php',
        'Sabberworm\\CSS\\Value\\URL' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/URL.php',
        'Sabberworm\\CSS\\Value\\Value' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/Value.php',
        'Sabberworm\\CSS\\Value\\ValueList' => __DIR__ . '/..' . '/sabberworm/php-css-parser/lib/Sabberworm/CSS/Value/ValueList.php',
        'WillWashburn\\Stream\\Exception\\StreamBufferTooSmallException' => __DIR__ . '/..' . '/willwashburn/stream/src/Stream/Exception/StreamBufferTooSmallException.php',
        'WillWashburn\\Stream\\Stream' => __DIR__ . '/..' . '/willwashburn/stream/src/Stream/Stream.php',
        'WillWashburn\\Stream\\StreamableInterface' => __DIR__ . '/..' . '/willwashburn/stream/src/Stream/StreamableInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74ae9b1e5d841728c62963ae6b648805::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74ae9b1e5d841728c62963ae6b648805::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74ae9b1e5d841728c62963ae6b648805::$classMap;

        }, null, ClassLoader::class);
    }
}
