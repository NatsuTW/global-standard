        <!-- pagination -->
        <?php if (paginate_links()) : ?>
          <div class="p-news__pagination c-pagination">
            <?php
            echo paginate_links(
              array(
                'end_size' => 1,
                'mid_size' => 2,
                'prev_next' => true,
                'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9.424" height="16.026" viewBox="0 0 9.424 16.026" class="prev-img">
                        <path id="icon-chevron-left" d="M23.437,10.378a1.362,1.362,0,0,0-1.92,0L14.81,17.107a1.356,1.356,0,0,0-.042,1.87l6.609,6.63A1.355,1.355,0,1,0,23.3,23.7l-5.618-5.7,5.759-5.7A1.341,1.341,0,0,0,23.437,10.378Z" transform="translate(-14.414 -9.983)" fill="#888" />
                      </svg>',
                'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="9.424" height="16.026" viewBox="0 0 9.424 16.026" class="next-img">
                        <path id="icon-chevron-right" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" transform="translate(-14.414 -9.983)" fill="#888" />
                      </svg>',
              )
            );
            ?>
          </div>
        <?php endif; ?>