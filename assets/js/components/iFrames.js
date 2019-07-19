class iFrames {

    /**
     * Construct iFrames
     */
    constructor() {
        if (window.$) {

            // When the window is resized
            $(window)
                .resize(function() {

                    $('iframe[src^="https://www.youtube.com"],iframe[src^="https://player.vimeo.com"]')
                        .each(function() {

                            //  The element which is fluid
                            var $fluidEl = $(this).parent();

                            //  Figure out and save aspect ratio and remove hard coded width/height
                            if (!$(this).hasClass('processed')) {
                                $(this)
                                    .removeAttr('height')
                                    .removeAttr('width')
                                    .addClass('processed');
                            }

                            //  Calculate new height in order to maintain a 16:9 aspect ratio
                            //  original 9 / 16 x new width = new height

                            var newWidth = $fluidEl.width();
                            $(this)
                                .width(newWidth)
                                .height(9/16*newWidth);
                        });
                })
                // Kick off one resize to fix all videos on page load
                .resize();
        }
    }
}

export default iFrames;
