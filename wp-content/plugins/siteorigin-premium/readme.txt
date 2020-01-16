=== SiteOrigin Premium ===
Requires at least: 4.7
Tested up to: 5.3
Stable tag: 1.11.0
Build time: 2019-12-31T14:59:27+02:00
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Addons for all SiteOrigin themes and plugins.

== Description ==

SiteOrigin Premium is a collection of powerful addons that enhance Page Builder, Widgets Bundle, SiteOrigin CSS and our WordPress themes. These addons improve existing features and add entirely new functionality. You'll love all the power they offer you.

We bundle every one of our addons into this single package, which means that as we introduce more addons, you get them free of charge for as long as you have an active license.

Most importantly, we also provide you with fast email support. In fact, our email support is 30 times faster than the free support we offer on our forums. You'll usually get a reply in just a few short hours.

== Installation ==

Read our [installation instructions](https://siteorigin.com/premium-documentation/install-siteorigin-premium/) for a full guide on installing SiteOrigin Premium.

== Documentation ==

[Documentation](https://siteorigin.com/premium-documentation/) is available on SiteOrigin.

== Changelog ==

= 1.11.0 - 31 December 2019 =
* Mirror Widgets: Removed user role restriction.
* Lightbox: Added a global setting to disable on tablet and mobile.
* Image Overlay: Fixed alignment when used with full-width stretched rows.
* Tooltip: Fixed line height when used on the SiteOrigin Image Grid widget.

= 1.10.2 - 29 October 2019 =
* WooCommerce Template Builder: Updated Empty Cart default layout to ensure full-width.
* WooCommerce Template Builder: Ensured WooCommerce notices are output before each template layout.
* WooCommerce Template Builder: Updated Product Default template to include Product Rating widget.
* WooCommerce Template Builder: Return `$template` instead of `$template_name` from `get_woocommerce_template_part` filter.

= 1.10.1 - 19 September 2019 =
* Support older versions of PHP.
* Mirror Widgets: Made post type hidden from public view.
* Ajax Comments: Fix for HTML5 themes.

= 1.10.0 - 6 August 2019 =
* New addon! WooCommerce Templates: Create custom WooCommerce templates using the power of SiteOrigin Page Builder.
* Prevent some undefined index notices in Block Editor.
* Move recommended plugins initialization to `plugins_loaded` action.
* Image Overlay: Add support for Jetpack image lazy loading.
* Tooltip: Add support for Jetpack lazy image loading.
* Animations: Perform 'hide before' initial setup in JS, so it's used by both block animations and hero content animations.
* Web Fonts Selector: Updated Google Fonts.
* Lightbox: Add fallback support for Image and Image Grid.

= 1.9.0 - 15 May 2019 =
* Mirror Widgets: New addon! Create a widget once, use it everywhere. Update it and the changes reflect in all instances of the widget.
* Image Overlay: Changed default overlay opacity to 0.8.
* Image Overlay: Option for when to display overlay on touch devices.
* Image Overlay: Prevent animation if overlay already in requested state.
* Image Overlay: Update on image grid layout complete.
* Fonts Selector: Prevent importing web safe fonts.
* Fonts Selector: Allow use of font variants.
* Add filter to disable background update checks.
* Add filter to disable TGMPA.

= 1.8.0 - 17 April 2019 =
* Image Overlay: New addon! Add a beautiful and customizable text overlay with animations to your images.

= 1.7.1 - 2 April 2019 =
* Fonts Selector: Remove dependency on Page Builder constant.
* Fonts Selector: Ensure $ is defined.
* Fonts Selector: Fix layout styles in different contexts.
* Fonts Selector: Keep focus on the Chosen search input.
* Fonts Selector: Fix for WP 4.9.9.

= 1.7.0 - 26 March 2019 =
* Fonts Selector: New addon feature! Choose from hundreds of beautiful web fonts in the visual editor.
* Properly hide addon settings iframe.
* Contact form location field: Use new location type to trigger missing API key warning.
* SO CSS Fonts Selector: Ensure font value is updated on first change.

= 1.6.0 - 12 March 2019 =
* Map Styles: New addon! Select from a curated set of predefined styles.
* Contact form location field: Removed widget form API key field.
* CPT Builder: Fix undefined index 'hierarchical' issue.

= 1.5.5 - 27 February 2019 =
* Create a more friendly error message for unauthorized errors.
* Switched addon videos in admin to Vimeo.
* Tabs: Ability to set position of tabs.
* Contact form: Add DateTime picker setting to optionally hide disabled times.
* CPT Builder: Made warnings stand out more when editing slugs of post types with existing posts.
* CPT Builder: Allow setting post types as hierarchical.
* Contact form: Add DateTime picker setting for always visible calendar.
* Parallax Sliders: Disable fixed background on mobile.

= 1.5.4 - 30 December 2018 =
* Allow for translation of plugin and addon file headers.
* Contact form fields: Prevent PHP Warning when `$instance` is empty.
* Animations: Only setup animations for widgets when in a preview.

= 1.5.3 - 18 December 2018 =
* Animations: Allow non-repeatable hover animations.
* Show SiteOrigin Page Builder, Widgets Bundle and CSS as recommended plugins.
* Tooltip: Prevent tooltip from always being present after showing in FireFox.
* CPT Builder: Use classic editor for SO custom post types.
* Contact form location field: Use global Google Maps API key if available.
* Animations: Add option to set the final state of an element after it's animation has completed.
* CPT Builder: Register custom post types earlier on `init`.
* Hero animations: Pass selector to front end so Element Enters Screen and Element In Screen triggers work.

= 1.5.2 - 28 November 2018 =
* Contact Form: Changed first day capitlisation.
* Block editor: Ensure scripts are enqueued and run for block editor previews.
* Block editor: Tabs/Accordion: Allow builder fields in the block editor.
* Correct nonce check for addon status change.
* Block animations: Fix missing jQuery.
* Block animations: Added debounce setting to control debounce for 'Element Enters Screen' and 'Element In Screen' events.
* Tooltip: Fix positioning when both tooltip and lightbox are enabled for an image.

= 1.5.1 - 12 October 2018 =
* Avoid 'undefined index' notices for style fields when using 'label' instead of 'name'.

= 1.5.0 - 12 October 2018 =
* Toggle Visibility Addon!
* Social Widgets: Check if icon is selected and use icon_name as name if no name is set.
* Social Widgets: Fix icon color not outputting and icon image repeat if no network name.
* Block Animations: Option to repeat hover animation until mouse leaves triggering element.
* Truncate long EDD filenames to prevent updates failing on Windows.
* Updated to EDD updater 1.6.17

= 1.4.4 - 10 September 2018 =
* Contact datepicker: Format selected date with il8n.
* Contact datepicker: Removed default date to ensure user has to select a date.
* Web font selector: Ensure changes are detected.

= 1.4.3 - 20 August 2018 =
* Parallax Sliders: Added fixed background option for the Hero and Layout Sliders.
* Contact Form: Added a setting for the first day of the week and made the form translation ready.

= 1.4.2 - 18 July 2018 =
* Correct tooltip y position when image overflows container vertically.
* CPT Builder: Fix widget with presets changes not propagating to CPT instances.
* Fix undefined index notice when creating new custom post type.
* Replace post with get

= 1.4.1 - 9 July 2018 =
* Fix fatal error for PHP 5.2. :(

= 1.4.0 - 3 July 2018 =
* New Tooltip addon!
* Added Web Font Selector video link.
* Added Social Widgets video.
* Optimized images.
* Update license status when doing update check. Display admin notices for invalid/expired licenses.

= 1.3.3 - 24 May 2018 =
* Fixed fatal error for PHP <= 5.4. :(

= 1.3.2 - 22 May 2018 =
* Fixed copy issues in a few places.
* Added Hero documentation link and video.
* Changed Social Widgets description.
* Social Widgets: Add button to description.
* Added new admin addon icons.
* Added videos for tabs and testimonials.
* CPTB: Replaced individual permissions with single option to allow editing of layout in post type instances.
* CPTB: Use widgets' content from post type instances and update widgets' content in instances unless edited.
* CPTB: Warn when changing non-editable layouts and there are existing instances of the post type.

= 1.3.1 - 9 April 2018 =
* CPT Builder: Prevent filtering out widgets added to custom post type instances.
* Animations: Only perform animations once.

 = 1.3.0 - 2 April 2018 =
* Contact: Auto responder!
* Hero: Addon to allow animation of Hero frames content!
* Contact: DateTime field has option to use 24h format for times.
* Web Font Selector: IE 11 Compat. Don't use `Array.from`.
* Added missing documentation links for Web Font Selector, Call-to-action and Testimonials addons.
* AJAX Comments: Disable comments form submit button when comment submitted.
* Moved animate JS and CSS to common folders and register in main file.
* Contact: Renamed addon for consistency with other widget addon names.
* Accordion: Option to scroll to a specific panel on load.

= 1.2.1 - 31 January 2018 =
* CPT Builder: Allow customization of available Page Builder features for the custom post type.
* Accordion: Moved presets field to above title field.
* Accordion: updated presets to use 16px for all panels and white font for Rounded preset.
* Fix PHP compatibility error.
* Lightbox: Added documentation link.
* Lightbox: Ensure instance specific settings are applied.
* CPT Builder: Prevent custom post types from showing in Page Builder settings list.
* CPT Builder: Use `widgets_init` action to register custom post types.
* Lightbox: Added global settings for overlay color and opacity.
* Testimonials: Font family and size options.
* CTA: Font family and size options.
* Accordion: Allow item specific title icons.
* CPT Builder: Add option of excluding custom post type from search.
* CPT Builder: Add description to Hierarchical to explain what it does.
* CPT Builder: Taxonomy items use label name in editor.

= 1.2.0 - 7 November 2017 =
* New Tabs Widget addon!
* Accordion: Use new presets field.
* Accordion: Allow for setting panels font family and size.
* Accordion: Allow for setting headings text transform.
* Accordion: Deep linking to single/multiple panels.
* Add rel="noopener noreferrer" for all 3rd party/unknown links.

= 1.1.2 - 20 October 2017 =
* Fix lightbox in slider and layout slider widgets.

= 1.1.1 - 12 October 2017 =
* Fix missing js lib.

= 1.1.0 - 11 October 2017 =
* New Accordion widget addon!
* Contact: Apply field label styles to DateTime field labels too.
* Pass post name through `sanitize_reserved_post_types` before using as post type slug.
* Spacing between addon item buttons.

= 1.0.7 - 19 September 2017 =
* Update to latest EDD updater
* Removed submodules and adding addon files back into main repo.
* Animate hiding/showing Lightbox fields.
* Added global and instance lightbox settings to disable captions.
* Prevent JS error when style attribute is empty string.
* Prevent error in Hero widget when lightbox is active.

= 1.0.6 - 9 September 2017 =
* Removed accidentally included addon folder.

= 1.0.5 - 6 September 2017 =
* Lightbox: Fix image widgets using 'image_set_slug'.
* Lightbox: Removed 'disable_scrolling' option which doesn't appear to work.
* Lightbox: Use `_sow_form_id` as slug for images already in group.
* Lightbox: Image widget fallback to using `_sow_form_id`.
* Lightbox: Use 'full' image sizes for lightbox.
* Lightbox: Use album name instead of image set slug.
* Lightbox: Conditional display of album name input when lightbox enabled.

= 1.0.4 - 7 August 2017 =
* Contact form fields: Don't apply disabled date ranges if parsing fails.
* Contact form fields: Google maps widget and contact form location field working together.
* Web font selector: Allow font family without quotes.
* Web font selector: Correct import URLs.
* Web font selector: Select first variant if no 'regular' variant exists.
* AJAX comments: Account for error handler.
* AJAX comments: Check for existing error before error.
* AJAX comments: Account for encoded text.
* AJAX comments: Correct spacing.
* AJAX comments: Move timer.
* Animations: Add hover event.
* Changed to an autoloader system.
* Move addons to submodules.
* Global settings for addons.
* Lightbox: New lightbox addon!

= 1.0.3 - 28 September 2016 =
* Added Google Font Field addon for SiteOrigin CSS.
* Disable Ajax Comments on WooCommerce to avoid conflict.
* Fixed Contact Form addon Date Picker

= 1.0.2 - 25 August 2016 =
* Various date picket contact form field improvements.
* Fix build script to remove node modules.
* JS fix to get menu working properly on multisite.

= 1.0.1 - 16 August 2016 =
* Fixed license checking and plugin updating.

= 1.0 - 12 August 2016 =
* Initial release.
