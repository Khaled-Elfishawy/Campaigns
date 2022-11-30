
$(function() {
  'use strict'


  $('[data-modal]').click(function() {
    const modal_id = $(this).attr('data-modal')
    $('#'+modal_id).addClass('active')
  })

  $('.modal .modal-close').click(function() {
    let modal = $(this).closest('.modal')
    modal.removeClass('active')
  })
})