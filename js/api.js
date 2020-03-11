//For submiting a new quote

(function($) {
  $('#quote-submit-form').on('submit', function(event) {
    event.preventDefault();

    const author = $('#quote-author').val();

    const content = $('#the-quote').val();

    const source = $('#quote-source').val();

    const url = $('#quote-source-url').val();

    $.ajax({
      method: 'POST',
      url: api_vars.url + 'wp/v2/posts',
      data: {
        title: author,
        content,
        _qod_quote_source: source,
        _qod_quote_source_url: url,
        status: 'pending'
      },

      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
      }
    })
      .success(function() {
        $('#quote-author').val('');
        $('#the-quote').val('');
        $('#quote-source').val('');
        $('#quote-source-url').val('');
        $('.submit-success').text('Success! Your quote has been submitted.');
      })
      .fail(function() {
        $('.submit-error').text('An error occurred. Please try again.');
      });
  });

  //For generating a new quote

  $('#generate-btn').on('click', function(event) {
    event.preventDefault();

    let valAuthor = $('#quote-author').val();

    let valContent = $('#the-quote').val();

    let valSource = $('#quote-source').val();

    let valUrl = $('#quote-source-url').val();

    $.ajax({
      method: 'get',
      url:
        api_vars.url +
        'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
      data: {
        title: valAuthor,
        content: valContent,
        _qod_quote_source: valSource,
        _qod_quote_source_url: valUrl,
        status: 'publish'
      }
    }).done(function(data) {
      for (let i = 0; i < data.length; i++) {
        $('.entry-content').html(data[i].content.rendered);
        $('.entry-header').html(data[i].title.rendered);

        // .append(`
        // ${data[i].content.rendered}
        // <h3> - ${data[i].title.rendered}</h3>
        // <a href="${data[i]._qod_quote_source_url}">
        // ${data[i]._qod_quote_source}
        // </a>
        // `)

        $('outer-flex-container').append(`
                ${data[i].content.rendered}
                <h3> - ${data[i].title.rendered}</h3>
                <a href="${data[i]._qod_quote_source_url}">
                ${data[i]._qod_quote_source}
                </a>
                `);

        $('inner-flex-container').append(`
                ${data[i].content.rendered}
                <h3> - ${data[i].title.rendered}</h3>
                <a href="${data[i]._qod_quote_source_url}">
                ${data[i]._qod_quote_source}
                </a>
                `);

        // history.pushState({}, '', data[i].link);
      }
    });
  });
})(jQuery);
