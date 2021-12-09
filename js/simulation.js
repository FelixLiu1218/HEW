$(function() {
   // ボタンクリック処理

   // ベッド
  $('#add_bed1').click(function() {
    $("#bed1").css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#delete_bed1').click(function() {
    $("#bed1").css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#add_bed2').click(function() {
    $("#bed2").css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#delete_bed2').click(function() {
    $("#bed2").css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#add_bed3').click(function() {
    $("#bed3").css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#delete_bed3').click(function() {
    $("#bed3").css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#add_bed4').click(function() {
    $("#bed4").css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#delete_bed4').click(function() {
    $("#bed4").css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#add_bed5').click(function() {
    $("#bed5").css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#delete_bed5').click(function() {
    $("#bed5").css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#add_bed6').click(function() {
    $("#bed6").css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  })
  $('#delete_bed6').click(function() {
    $("#bed6").css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
  })


  // ドラッグ
  $('.furniture').draggable({
    containment:".fro", //ドラッグの範囲を制限
    zIndex: "10",//ドラッグ中にのみかかるzindex
    drag: function(e, ui) {
      $(this).attr('class', 'drag');
    },
    stop: function(e, ui) {
      $(this).removeAttr('class','drag');
    }
    // revert: true,
    // revertDuration: 500, //戻る時間
  });

  // ドロップ
  $('.furniture').droppable({
    //ドロップした時に呼び出される
    accept:'.drag', //ドロップできる対象を指定
    tolerance: 'touch',
    drop: function(e, ui) {
      $(".drag").css({'position':'absolute', 'left':'0', 'top':'0'});
    }
  });
});
