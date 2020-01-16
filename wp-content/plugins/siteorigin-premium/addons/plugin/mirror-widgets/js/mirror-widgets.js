jQuery( function ( $ ) {
    $(document).on('before_panels_setup', function ( event, builderView ) {
        // Toggle the Add Widget button visibility. We only want to allow adding a single widget.
        builderView.model.on('load_panels_data change', function () {
            var panelsData = builderView.model.get('data');
            if (panelsData.hasOwnProperty('widgets')) {
                if (panelsData.widgets.length > 0) {
                    builderView.$el.find('> .so-builder-toolbar > .so-tool-button.so-widget-add').hide();
                } else {
                    builderView.$el.find('> .so-builder-toolbar > .so-tool-button.so-widget-add').show();
                }
            }
        });
        // Prevent duplicating widgets to ensure we only have one widget.
        builderView.on('widget_added', function (widgetView) {
            widgetView.$('.actions .widget-duplicate').hide();
        });
        builderView.on('open_dialog', function (dialog) {
            if (dialog instanceof panels.dialog.widget) {
                dialog.$('.so-toolbar .so-duplicate').hide();
            }
        });
    });
} );
