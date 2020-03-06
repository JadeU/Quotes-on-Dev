
(function($){ 

    $('#quote-submit-form').on('submit', function(event) {
      event.preventDefault();
    
      let valAuthor = $('#quote-author').val();
    
      let valContent = $('#the-quote').val();
    
      let valSource = $('#quote-source').val();
    
      let valUrl = $('#quote-source-url').val();
    
      console.log(api_vars);
    
      $.ajax({
        method: 'post',
        url: api_vars.url + 'wp/v2/posts',
        data: {
          'title': valAuthor,
          'content': valContent,
          '_qod_quote_source': valSource,
          '_qod_quote_source_url': valUrl,
          'status': 'publish'
        },
    
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
        }
      }).done(function(response) {
        console.log(response);
      });
    });
    }(jQuery));