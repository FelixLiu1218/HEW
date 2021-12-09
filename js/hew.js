$(function() {
   // ボタンクリック処理

  // ベッド
  // 追加
  var modan = 1;
  $('#add_bed1').click(function() {
    //noneをblockに
    $('#modanbed' + modan).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
    $('#modanbed' + modan).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横の画像
        $(this).css('width','25.5%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        $(this).css('width','18%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //横の画像
        $(this).css('width','25.5%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        $(this).css('width','18%');
      }
    });
    // 2個目以降の追加
    modan = modan + 1;
    $('#modanbed' + (modan-1)).after('<img src="../images/bed2on.png" id="modanbed' + modan + '" class="furniture" width="18%" />');
  })
  // 追加した順に削除
  var d_modan = 1;
  var for_modan = 1;
  $('#delete_bed1').click(function() {
    for (var i=for_modan; i<modan; i++) {
      $('#modanbed' + d_modan).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_modan = d_modan + 1;
    }
    for_modan = modan;
  })



  // ベッド2つ目
  var orange = 1;
 $('#add_bed2').click(function() {
   $('#orangebed' + orange).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
   $('#orangebed' + orange).click(function(){
     var props = $(this).css('transform');
     var img = $(this).attr('src');
     if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed1on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       $(this).css('width','25.4%');
     } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed1off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(180deg)');
       $(this).css('width','20%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed1on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       $(this).css('transform','rotate(180deg)');
       $(this).css('width','25.4%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed1off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(0deg)');
       $(this).css('width','20%');
     }
   });
   orange = orange + 1;
   $('#orangebed' + (orange-1)).after('<img src="../images/bed1on.png" id="orangebed' + orange + '" class="furniture" width="20%" />');
  })
  var d_orange = 1;
  var for_orange = 1;
  $('#delete_bed2').click(function() {
    for (var i=for_orange; i<orange; i++) {
      $('#orangebed' + d_orange).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_orange = d_orange + 1;
    }
    for_orange = orange;
  })


  // ベッド3つ目
  var nidan = 1;
  $('#add_bed3').click(function() {
    $('#nidanbed'+nidan).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
   $('#nidanbed' + nidan).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed3on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //調節しないとダメな箇所
      $(this).css('width','26%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed3off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','16.5%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed3on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','26%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed3off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //調節しないといけない場所
      $(this).css('width','16.5%');
    }
  });
  //2個目の追加
  nidan = nidan + 1;
  $('#nidanbed' + (nidan-1)).after('<img src="../images/bed3on.png" id="nidanbed' + nidan + '" class="furniture" width="16.5%" />');
 })

 var d_nidan = 1;
 var for_nidan = 1;
  $('#delete_bed3').click(function() {
    for (var i=for_nidan; i<nidan; i++) {
      $('#nidanbed' + d_nidan).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_nidan = d_nidan + 1;
    }
    for_nidan = nidan;
  })



  //ベット4番目
  var classic = 1;
  $('#add_bed4').click(function() {
    $('#classicbed'+classic).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
   $('#classicbed' + classic).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed4on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //横,調節しないとダメな箇所
      $(this).css('width','26%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed4off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //縦調節しないといけない場所
      $(this).css('width','12%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed4on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','26%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed4off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //横,調節しないといけない場所
      $(this).css('width','12%');
    }
     //
  });

  classic = classic + 1;
  $('#classicbed' + (classic-1)).after('<img src="../images/bed4on.png" id="classicbed' + classic + '" class="furniture" width="12%" />');
 })

  var d_classic = 1;
  var for_classic = 1;
  $('#delete_bed4').click(function() {
    for (var i=for_classic; i<classic; i++) {
      $('#classicbed' + d_classic).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_classic = d_classic + 1;
    }
    for_classic = classic;
  })

  //ベット5//

  var melhen = 1;
  $('#add_bed5').click(function() {
    $('#melhenbed'+melhen).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#melhenbed' + melhen).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed5on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','23%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed5off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','13%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed5on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','23%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed5off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','13%');
      }

  });

  melhen = melhen + 1;
  $('#melhenbed' + (melhen-1)).after('<img src="../images/bed5on.png" id="melhenbed' + melhen + '" class="furniture" width="13%" />');
 })

  var d_melhen = 1;
  var for_melhen = 1;
  $('#delete_bed5').click(function() {
    for (var i=for_melhen; i<melhen; i++) {
      $('#melhenbed' + d_melhen).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_melhen = d_melhen + 1;
    }
    for_melhen = melhen;
  })

  //ベット6
  var chic = 1;
  $('#add_bed6').click(function() {
    $('#chicbed'+chic).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
    $('#chicbed' + chic).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed6on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','30%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/bed6off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','17%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed6on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','30%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/bed6off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','17%');
      }

  });

  chic = chic + 1;
  $('#chicbed' + (chic-1)).after('<img src="../images/bed6on.png" id="chicbed' + chic + '" class="furniture" width="17%" />');
 })

 var d_chic = 1;
 var for_chic = 1;
  $('#delete_bed6').click(function() {
    for (var i=for_chic; i<chic; i++) {
      $('#chicbed' + d_chic).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_chic = d_chic + 1;
    }
    for_chic = chic;
  })


   // イス1つ目
  var isu = 1;
  $('#add_isu1').click(function() {
    $('#isu' + isu).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転

   $('#isu' + isu).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/isu_200_4on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //横,調節しないとダメな箇所
      $(this).css('width','12%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/isu_200_4off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //縦調節しないといけない場所
      $(this).css('width','10%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/isu_200_4on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','12%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/isu_200_4off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //横,調節しないといけない場所
      $(this).css('width','10%');
    }
    //
    });

    isu = isu + 1;
    $('#isu' + (isu-1)).after('<img src="../images/isu_200_4on.png" id="isu' + isu + '" class="furniture" width="10%" />');
   })
  var d_isu = 1;
  var for_isu = 1;
  $('#delete_isu1').click(function() {
    for (var i=for_isu; i<isu; i++) {
      $('#isu' + d_isu).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_isu = d_isu + 1;
    }
    for_isu = isu;
  })




  // イス2つ目
  var work = 1;
  $('#add_isu2').click(function() {
    $('#workisu' + work).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
    $('#workisu' + work).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/isu_200_5on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','12%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/isu_200_5off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','10%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/isu_200_5on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','12%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/isu_200_5off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','10%');
      }

    });

    work = work + 1;
    $('#workisu' + (work-1)).after('<img src="../images/isu_200_5on.png" id="workisu' + work + '" class="furniture" width="10%" />');
   })

  var d_work = 1;
  var for_work = 1;
  $('#delete_isu2').click(function() {
    for (var i=for_work; i<work; i++) {
      $('#workisu' + d_work).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_work = d_work + 1;
    }
    for_work = work;
  })


   //イス3
   var wood = 1;
  $('#add_isu3').click(function() {
    $('#woodisu' + wood).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
     $('#woodisu' + wood).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/isu_200_3on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','13.5%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/isu_200_3off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','10%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/isu_200_3on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','13.5%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/isu_200_3off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','10%');
      }

    //
    });

    wood = wood + 1;
    $('#woodisu' + (wood-1)).after('<img src="../images/isu_200_3on.png" id="woodisu' + wood + '" class="furniture" width="10%" />');
   })
   var d_wood = 1;
   var for_wood = 1;
   $('#delete_isu3').click(function() {
     for (var i=for_wood; i<wood; i++) {
       $('#woodisu' + d_wood).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
       d_wood = d_wood + 1;
    }
    for_wood = wood;
   })

   //テーブル

   var table = 1;
  $('#add_table').click(function() {
    $('#table' + table).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転

    $('#table' + table).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk1on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','17%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk1off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','28%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk1on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','17%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk1off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','28%');
      }

    });

    table = table + 1;
    $('#table' + (table-1)).after('<img src="../images/desk1on.png" id="table' + table + '" class="furniture" width="28%" />');
   })
   var d_table = 1;
   var for_table = 1;
   $('#delete_table').click(function() {
     for (var i=for_table; i<table; i++) {
       $('#table' + d_table).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
       d_table = d_table + 1;
     }
     for_table = table;
   })

   //テーブル2
   var table1 = 1;
  $('#add_longtable').click(function() {
    $('#longtable' + table1).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
    $('#longtable' + table1).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','16%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','24%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','16%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','24%');
      }

    });

    table1 = table1 + 1;
    $('#longtable' + (table1-1)).after('<img src="../images/desk2on.png" id="longtable' + table1 + '" class="furniture" width="24%" />');
   })
   var d_table1 = 1;
   var for_table1 = 1;
  $('#delete_longtable').click(function() {
    for (var i=for_table1; i<table1; i++) {
      $('#longtable' + d_table1).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_table1 = d_table1 + 1;
    }
    for_table1 = table1;
  })




//テーブル3つめ
   var table2 = 1;
  $('#add_shottable').click(function() {
    $('#shottable' + table2).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
    $('#shottable' + table2).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk3on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','13%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk3off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','22%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk3on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','13%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk3off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','22%');
      }

    });



    table2 = table2 + 1;
    $('#shottable' + (table2-1)).after('<img src="../images/desk3on.png" id="shottable' + table2 + '" class="furniture" width="22%" />');
   })

  var d_table2 = 1;
  var for_table2 = 1;
  $('#delete_shottable').click(function() {
    for (var i=for_table2; i<table2; i++) {
      $('#shottable' + d_table2).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_table2 = d_table2 + 1;
    }
    for_table2 = table2;
  })

   //テーブル4エラーが発生している場所
   var table3 = 1;
  $('#add_blantable').click(function() {
    $('#blantable' + table3).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転
    $('#blantable' + table3).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk4_on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //縦,調節しないとダメな箇所
        $(this).css('width','11.5%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk4_off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //横調節しないといけない場所
        $(this).css('width','18%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk4_on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','11.5%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk4_off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','18%');
      }

    });



    table3 = table3 + 1;
    $('#blantable' + (table3-1)).after('<img src="../images/desk4_on.png" id="blantable' + table3 + '" class="furniture" width="18%" />');
   })

  var d_table3 = 1;
  var for_table3 = 1;
  $('#delete_blantable').click(function() {
    for (var i=for_table3; i<table3; i++) {
      $('#blantable' + d_table3).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_table3 = d_table3 + 1;
    }
    for_table3 = table3;
  })

　//テーブル5

var table4 = 1;
$('#add_whitetable').click(function() {
  $('#whitetable' + table4).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  // 回転
  $('#whitetable' + table4).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk5_on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //縦,調節しないとダメな箇所
      $(this).css('width','13.9%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk5_off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //横調節しないといけない場所
      $(this).css('width','24%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk5_on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //縦調節しないといけない場所
      $(this).css('width','13.9%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk5_off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //横,調節しないといけない場所
      $(this).css('width','24%');
    }

  });



  table4 = table4 + 1;
  $('#whitetable' + (table4-1)).after('<img src="../images/desk5_on.png" id="whitetable' + table4 + '" class="furniture" width="24%" />');
 })

 var d_table4 = 1;
 var for_table4 = 1;
  $('#delete_whitetable').click(function() {
    for (var i=for_table4; i<table4; i++) {
      $('#whitetable' + d_table4).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_table4 = d_table4 + 1;
    }
    for_table4 = table4;
  })



 //テーブル6家具が出力されない


 var table5 = 1;
 $('#add_1table').click(function() {
   $('#1table' + table5).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
   $('#1table' + table5).click(function(){
     var props = $(this).css('transform');
     var img = $(this).attr('src');
     if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk6_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       //縦,調節しないとダメな箇所
       $(this).css('width','13.9%');
     } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/desk6_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(180deg)');
       //横調節しないといけない場所
       $(this).css('width','24%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk6_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       $(this).css('transform','rotate(180deg)');
       //縦調節しないといけない場所
       $(this).css('width','13.9%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/desk6_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(0deg)');
       //横,調節しないといけない場所
       $(this).css('width','24%');
     }

   });



   table5 = table5 + 1;
   $('#1table' + (table5-1)).after('<img src="../images/desk6_on.png" id="1table' + table5 + '" class="furniture" width="24%" />');
  })

  var d_table5 = 1;
  var for_table5 = 1;
  $('#delete_1table').click(function() {
    for (var i=for_table5; i<table5; i++) {
      $('#1table' + d_table5).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_table5 = d_table5 + 1;
    }
    for_table5 = table5;
  })



   //収納

   //収納一つ目
   var kitichen = 1;
  $('#add_kitichen').click(function() {
    $('#kitichen' + kitichen).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
    // 回転コピペしたら変更する
    $('#kitichen' + kitichen).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/kitchen2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','16%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/kitchen2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','40%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/kitchen2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','16%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/kitchen2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','40%');
      }

    });

    kitichen = kitichen + 1;
    $('#kitichen' + (kitichen-1)).after('<img src="../images/kitchen2on.png" id="kitichen' + kitichen + '" class="furniture" width="40%" />');
   })

  var d_kitichen = 1;
  var for_kitichen = 1;
  $('#delete_kitichen').click(function() {
    for (var i=for_kitichen; i<kitichen; i++) {
      $('#kitichen' + d_kitichen).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_kitichen = d_kitichen + 1;
    }
    for_kitichen = kitichen;
  })



   //収納2つ目
   var kitichen1 = 1;
   $('#add_shed').click(function() {
     $('#shed' + kitichen1).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転コピペしたら変更する
     $('#shed' + kitichen1).click(function(){
       var props = $(this).css('transform');
       var img = $(this).attr('src');
       if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/kitchen1_on.png') {
         var img_off = $(this).attr('src').replace('on','off');
         $(this).attr('src',img_off);
         //横,調節しないとダメな箇所
         $(this).css('width','10%');
       } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/kitchen1_off.png') {
         var img_on = $(this).attr('src').replace('off','on');
         $(this).attr('src',img_on);
         $(this).css('transform','rotate(180deg)');
         //縦調節しないといけない場所
         $(this).css('width','40%');
       } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/kitchen1_on.png') {
         var img_off = $(this).attr('src').replace('on','off');
         $(this).attr('src',img_off);
         $(this).css('transform','rotate(180deg)');
         //調節しないといけない場所
         $(this).css('width','10%');
       } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/kitchen1_off.png') {
         var img_on = $(this).attr('src').replace('off','on');
         $(this).attr('src',img_on);
         $(this).css('transform','rotate(0deg)');
         //横,調節しないといけない場所
         $(this).css('width','40%');
       }

     });

     kitichen1 = kitichen1 + 1;
     $('#shed' + (kitichen1-1)).after('<img src="../images/kitchen1_on.png" id="shed' + kitichen1 + '" class="furniture" width="40%" />');
    })

  var d_kitichen1 = 1;
  var for_kitichen1 = 1;
  $('#delete_shed').click(function() {
    for (var i=for_kitichen1; i<kitichen1; i++) {
      $('#shed' + d_kitichen1).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_kitichen1 = d_kitichen1 + 1;
    }
    for_kitichen1 = kitichen1;
  })


      //収納3つ目
     var kitichen2 = 1;
     $('#add_chest').click(function() {
       $('#chest' + kitichen2).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
       // 回転コピペしたら変更する
       $('#chest' + kitichen2).click(function(){
         var props = $(this).css('transform');
         var img = $(this).attr('src');
         if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/kitchen3_on.png') {
           var img_off = $(this).attr('src').replace('on','off');
           $(this).attr('src',img_off);
           //横,調節しないとダメな箇所
           $(this).css('width','12.5%');
         } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/kitchen3_off.png') {
           var img_on = $(this).attr('src').replace('off','on');
           $(this).attr('src',img_on);
           $(this).css('transform','rotate(180deg)');
           //縦調節しないといけない場所
           $(this).css('width','40%');
         } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/kitchen3_on.png') {
           var img_off = $(this).attr('src').replace('on','off');
           $(this).attr('src',img_off);
           $(this).css('transform','rotate(180deg)');
           //調節しないといけない場所
           $(this).css('width','12.5%');
         } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/kitchen3_off.png') {
           var img_on = $(this).attr('src').replace('off','on');
           $(this).attr('src',img_on);
           $(this).css('transform','rotate(0deg)');
           //横,調節しないといけない場所
           $(this).css('width','40%');
         }

       });

       kitichen2 = kitichen2 + 1;
       $('#chest' + (kitichen2-1)).after('<img src="../images/kitchen3_on.png" id="chest' + kitichen2 + '" class="furniture" width="40%" />');
      })

  var d_kitichen2 = 1;
  var for_kitichen2 = 1;
  $('#delete_chest').click(function() {
    for (var i=for_kitichen2; i<kitichen2; i++) {
      $('#chest' + d_kitichen2).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_kitichen2 = d_kitichen2 + 1;
    }
    for_kitichen2 = kitichen2;
  })






      //本棚がエラー出ている

      var kitichen3 = 1;
     $('#add_hondana').click(function() {
       $('#hondana' + kitichen3).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
       // 回転コピペしたら変更する
       $('#hondana' + kitichen3).click(function(){
         var props = $(this).css('transform');
         var img = $(this).attr('src');
         if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/chest1_on.png') {
           var img_off = $(this).attr('src').replace('on','off');
           $(this).attr('src',img_off);
           //横,調節しないとダメな箇所
           $(this).css('width','8.5%');
         } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/chest1_off.png') {
           var img_on = $(this).attr('src').replace('off','on');
           $(this).attr('src',img_on);
           $(this).css('transform','rotate(180deg)');
           //縦調節しないといけない場所
           $(this).css('width','37.5%');
         } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/chest1_on.png') {
           var img_off = $(this).attr('src').replace('on','off');
           $(this).attr('src',img_off);
           $(this).css('transform','rotate(180deg)');
           //調節しないといけない場所
           $(this).css('width','8.5%');
         } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/chest1_off.png') {
           var img_on = $(this).attr('src').replace('off','on');
           $(this).attr('src',img_on);
           $(this).css('transform','rotate(0deg)');
           //横,調節しないといけない場所
           $(this).css('width','37.5%');
         }

       });

       kitichen3 = kitichen3 + 1;
       $('#hondana' + (kitichen3-1)).after('<img src="../images/chest1_on.png" id="hondana' + kitichen3 + '" class="furniture" width="37.5%" />');
      })

  var d_kitichen3 = 1;
  var for_kitichen3 = 1;
  $('#delete_hondana').click(function() {
    for (var i=for_kitichen3; i<kitichen3; i++) {
      $('#hondana' + d_kitichen3).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_kitichen3 = d_kitichen3 + 1;
    }
    for_kitichen3 = kitichen3;
  })


      //白棚

      var kitichen4 = 1;
      $('#add_sirotana').click(function() {
        $('#sirotana' + kitichen4).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
        // 回転コピペしたら変更する
        $('#sirotana' + kitichen4).click(function(){
          var props = $(this).css('transform');
          var img = $(this).attr('src');
          if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/chest4_on.png') {
            var img_off = $(this).attr('src').replace('on','off');
            $(this).attr('src',img_off);
            //横,調節しないとダメな箇所
            $(this).css('width','8.5%');
          } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/chest4_off.png') {
            var img_on = $(this).attr('src').replace('off','on');
            $(this).attr('src',img_on);
            $(this).css('transform','rotate(180deg)');
            //ここを一緒にする縦調節しないといけない場所
            $(this).css('width','33.5%');
          } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/chest4_on.png') {
            var img_off = $(this).attr('src').replace('on','off');
            $(this).attr('src',img_off);
            $(this).css('transform','rotate(180deg)');
            //調節しないといけない場所
            $(this).css('width','8.5%');
          } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/chest4_off.png') {
            var img_on = $(this).attr('src').replace('off','on');
            $(this).attr('src',img_on);
            $(this).css('transform','rotate(0deg)');
            //横統一する,調節しないといけない場所
            $(this).css('width','33.5%');
          }

        });

        kitichen4 = kitichen4 + 1;
        $('#sirotana' + (kitichen4-1)).after('<img src="../images/chest4_on.png" id="sirotana' + kitichen4 + '" class="furniture" width="33.5%" />');
       })

  var d_kitichen4 = 1;
  var for_kitichen4 = 1;
  $('#delete_sirotana').click(function() {
    for (var i=for_kitichen4; i<kitichen4; i++) {
      $('#sirotana' + d_kitichen4).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_kitichen4 = d_kitichen4 + 1;
    }
    for_kitichen4 = kitichen4;
  })


        //白棚

      var kitichen5 = 1;
      $('#add_siromini').click(function() {
        $('#siromini' + kitichen5).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
        // 回転コピペしたら変更する
        $('#siromini' + kitichen5).click(function(){
          var props = $(this).css('transform');
          var img = $(this).attr('src');
          if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/test3_on.png') {
            var img_off = $(this).attr('src').replace('on','off');
            $(this).attr('src',img_off);
            //横,調節しないとダメな箇所
            $(this).css('width','10.5%');
          } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/test3_off.png') {
            var img_on = $(this).attr('src').replace('off','on');
            $(this).attr('src',img_on);
            $(this).css('transform','rotate(180deg)');
            //縦調節しないといけない場所☆
            $(this).css('width','25.5%');
          } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/test3_on.png') {
            var img_off = $(this).attr('src').replace('on','off');
            $(this).attr('src',img_off);
            $(this).css('transform','rotate(180deg)');
            //調節しないといけない場所
            $(this).css('width','10.5%');
          } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/test3_off.png') {
            var img_on = $(this).attr('src').replace('off','on');
            $(this).attr('src',img_on);
            $(this).css('transform','rotate(0deg)');
            //横,調節しないといけない場所
            $(this).css('width','25.5%');
          }

        });

        kitichen5 = kitichen5 + 1;
        $('#siromini' + (kitichen5-1)).after('<img src="../images/test3_on.png" id="siromini' + kitichen5 + '" class="furniture" width="25.5%" />');
       })

  var d_kitichen5 = 1;
  var for_kitichen5 = 1;
  $('#delete_siromini').click(function() {
    for (var i=for_kitichen5; i<kitichen5; i++) {
      $('#siromini' + d_kitichen5).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_kitichen5 = d_kitichen5 + 1;
    }
    for_kitichen5 = kitichen5;
  })





       //

       var kitichen6 = 1;
      $('#add_1tana').click(function() {
        $('#1tana' + kitichen6).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
        // 回転コピペしたら変更する
        $('#1tana' + kitichen6).click(function(){
          var props = $(this).css('transform');
          var img = $(this).attr('src');
          if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/tans2_on.png') {
            var img_off = $(this).attr('src').replace('on','off');
            $(this).attr('src',img_off);
            //横,調節しないとダメな箇所
            $(this).css('width','10.5%');
          } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/tans2_off.png') {
            var img_on = $(this).attr('src').replace('off','on');
            $(this).attr('src',img_on);
            $(this).css('transform','rotate(180deg)');
            //縦調節しないといけない場所
            $(this).css('width','25.5%');
          } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/tans2_on.png') {
            var img_off = $(this).attr('src').replace('on','off');
            $(this).attr('src',img_off);
            $(this).css('transform','rotate(180deg)');
            //調節しないといけない場所
            $(this).css('width','10.5%');
          } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/tans2_off.png') {
            var img_on = $(this).attr('src').replace('off','on');
            $(this).attr('src',img_on);
            $(this).css('transform','rotate(0deg)');
            //横,調節しないといけない場所
            $(this).css('width','25.5%');
          }

        });

        kitichen6 = kitichen6 + 1;
        $('#1tana' + (kitichen6-1)).after('<img src="../images/tans2_on.png" id="1tana' + kitichen6 + '" class="furniture" width="25.5%" />');
       })

       var d_kitichen6 = 1;
       var for_kitichen6 = 1;
       $('#delete_1tana').click(function() {
         for (var i=for_kitichen6; i<kitichen6; i++) {
           $('#1tana' + d_kitichen6).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
           d_kitichen6 = d_kitichen6 + 1;
         }
         for_kitichen6 = kitichen6;
       })



        //棚8
       var kitichen7 = 1;
       $('#add_2tana').click(function() {
         $('#2tana' + kitichen7).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
         // 回転コピペしたら変更する
         $('#2tana' + kitichen7).click(function(){
           var props = $(this).css('transform');
           var img = $(this).attr('src');
           if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/tans1_on.png') {
             var img_off = $(this).attr('src').replace('on','off');
             $(this).attr('src',img_off);
             //横,調節しないとダメな箇所
             $(this).css('width','10.5%');
           } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/tans1_off.png') {
             var img_on = $(this).attr('src').replace('off','on');
             $(this).attr('src',img_on);
             $(this).css('transform','rotate(180deg)');
             //縦調節しないといけない場所
             $(this).css('width','25.5%');
           } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/tans1_on.png') {
             var img_off = $(this).attr('src').replace('on','off');
             $(this).attr('src',img_off);
             $(this).css('transform','rotate(180deg)');
             //調節しないといけない場所
             $(this).css('width','10.5%');
           } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/tans1_off.png') {
             var img_on = $(this).attr('src').replace('off','on');
             $(this).attr('src',img_on);
             $(this).css('transform','rotate(0deg)');
             //横,調節しないといけない場所
             $(this).css('width','25.5%');
           }

         });

         kitichen7 = kitichen7 + 1;
         $('#2tana' + (kitichen7-1)).after('<img src="../images/tans1_on.png" id="2tana' + kitichen7 + '" class="furniture" width="25.5%" />');
        })

        var d_kitichen7 = 1;
        var for_kitichen7 = 1;
        $('#delete_2tana').click(function() {
          for (var i=for_kitichen7; i<kitichen7; i++) {
            $('#2tana' + d_kitichen7).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
            d_kitichen7 = d_kitichen7 + 1;
          }
          for_kitichen7 = kitichen7;
        })


          //棚8
       var kitichen8 = 1;
       $('#add_3tana').click(function() {
         $('#3tana' + kitichen8).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
         // 回転コピペしたら変更する
         $('#3tana' + kitichen8).click(function(){
           var props = $(this).css('transform');
           var img = $(this).attr('src');
           if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/test4_on.png') {
             var img_off = $(this).attr('src').replace('on','off');
             $(this).attr('src',img_off);
             //横,調節しないとダメな箇所
             $(this).css('width','7.8%');
           } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/test4_off.png') {
             var img_on = $(this).attr('src').replace('off','on');
             $(this).attr('src',img_on);
             $(this).css('transform','rotate(180deg)');
             //縦調節しないといけない場所
             $(this).css('width','25.5%');
           } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/test4_on.png') {
             var img_off = $(this).attr('src').replace('on','off');
             $(this).attr('src',img_off);
             $(this).css('transform','rotate(180deg)');
             //調節しないといけない場所
             $(this).css('width','7.8%');
           } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/test4_off.png') {
             var img_on = $(this).attr('src').replace('off','on');
             $(this).attr('src',img_on);
             $(this).css('transform','rotate(0deg)');
             //横,調節しないといけない場所
             $(this).css('width','25.5%');
           }

         });

         kitichen8 = kitichen8 + 1;
         $('#3tana' + (kitichen8-1)).after('<img src="../images/test4_on.png" id="3tana' + kitichen8 + '" class="furniture" width="25.5%" />');
        })

        var d_kitichen8 = 1;
        var for_kitichen8 = 1;
        $('#delete_3tana').click(function() {
          for (var i=for_kitichen8; i<kitichen8; i++) {
            $('#3tana' + d_kitichen8).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
            d_kitichen8 = d_kitichen8 + 1;
          }
          for_kitichen8 = kitichen8;
        })

   //ソファ一つ目
   var sofa1 = 1;
   $('#add_sofa1').click(function() {
     $('#graysofa' + sofa1).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#graysofa' + sofa1).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa4on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','11.5%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa4off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','23%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa4on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','11.5%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa4off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','23%');
      }

     });

     sofa1 = sofa1 + 1;
     $('#graysofa' + (sofa1-1)).after('<img src="../images/sofa4on.png" id="graysofa' + sofa1 + '" class="furniture" width="23%" />');
    })

  var d_sofa1 = 1;
  var for_sofa1 = 1;
  $('#delete_sofa1').click(function() {
    for (var i=for_sofa1; i<sofa1; i++) {
      $('#graysofa' + d_sofa1).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_sofa1 = d_sofa1 + 1;
    }
    for_sofa1 = sofa1;
  })


    //ソファ二つ目
   var sofa2 = 1;
   $('#add_sofa2').click(function() {
     $('#whitesofa' + sofa2).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#whitesofa' + sofa2).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa5on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','11.5%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa5off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','26%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa5on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','11.5%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa5off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','26%');
      }

     });

     sofa2 = sofa2 + 1;
     $('#whitesofa' + (sofa2-1)).after('<img src="../images/sofa5on.png" id="whitesofa' + sofa2 + '" class="furniture" width="26%" />');
    })
    var d_sofa2 = 1;
    var for_sofa2 = 1;
    $('#delete_sofa2').click(function() {
      for (var i=for_sofa2; i<sofa2; i++) {
        $('#whitesofa' + d_sofa2).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
        d_sofa2 = d_sofa2 + 1;
      }
      for_sofa2 = sofa2;
    })


      //ソファ3つ目

   var sofa3 = 1;
   $('#add_sofa3').click(function() {
     $('#orangesofa' + sofa3).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#orangesofa' + sofa3).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa6on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','14%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa6off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','23%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa6on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','14%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa6off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','23%');
      }
     });

     sofa3 = sofa3 + 1;
     $('#orangesofa' + (sofa3-1)).after('<img src="../images/sofa6on.png" id="orangesofa' + sofa3 + '" class="furniture" width="23%" />');
    })
    var d_sofa3 = 1;
    var for_sofa3 = 1;
  $('#delete_sofa3').click(function() {
    for (var i=for_sofa3; i<sofa3; i++) {
      $('#orangesofa' + d_sofa3).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_sofa3 = d_sofa3 + 1;
    }
    for_sofa3 = sofa3;
  })

    //ソファ4つ目
    var sofa4 = 1;
   $('#add_sofa4').click(function() {
     $('#sofabed' + sofa4).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     $('#sofabed' + sofa4).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa1on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','16.8%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa1off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','23%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa1on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','16.8%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa1off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','23%');
      }
     });

     sofa4 = sofa4 + 1;
     $('#sofabed' + (sofa4-1)).after('<img src="../images/sofa1on.png" id="sofabed' + sofa4 + '" class="furniture" width="23%" />');
    })
    var d_sofa4 = 1;
    var for_sofa4 = 1;
    $('#delete_sofa4').click(function() {
      for (var i=for_sofa4; i<sofa4; i++) {
        $('#sofabed' + d_sofa4).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
        d_sofa4 = d_sofa4 + 1;
      }
      for_sofa4 = sofa4;
    })

    //sofa2on.png
    //ソファ5
    var sofa5 = 1;
   $('#add_sofa5').click(function() {
     $('#cornersofa' + sofa5).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#cornersofa' + sofa5).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','17%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','28%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa2on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','17%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa2off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','28%');
      }

     });
     sofa5 = sofa5 + 1;
     $('#cornersofa' + (sofa5-1)).after('<img src="../images/sofa2on.png" id="cornersofa' + sofa5 + '" class="furniture" width="28%" />');
    })
    var d_sofa5 = 1;
    var for_sofa5 = 1;
    $('#delete_sofa5').click(function() {
      for (var i=for_sofa5; i<sofa5; i++) {
        $('#cornersofa' + d_sofa5).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
        d_sofa5 = d_sofa5 + 1;
      }
      for_sofa5 = sofa5;
    })


    //ソファ6
    var sofa6 = 1;
   $('#add_sofa6').click(function() {
     $('#sofa' + sofa6).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#sofa' + sofa6).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa3on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','12%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa3off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','23%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa3on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','12%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa3off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','23%');
      }

     });

     sofa6 = sofa6 + 1;
     $('#sofa' + (sofa6-1)).after('<img src="../images/sofa3on.png" id="sofa' + sofa6 + '" class="furniture" width="23%" />');
    })
    var d_sofa6 = 1;
    var for_sofa6 = 1;
    $('#delete_sofa6').click(function() {
      for (var i=for_sofa6; i<sofa6; i++) {
        $('#sofa' + d_sofa6).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
        d_sofa6 = d_sofa6 + 1;
      }
      for_sofa6 = sofa6;
    })

    //ソファ7つめ

    var sofa7 = 1;
    $('#add_sofa7').click(function() {
      $('#midorisofa' + sofa7).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
      // 回転
      $('#midorisofa' + sofa7).click(function(){
       var props = $(this).css('transform');
       var img = $(this).attr('src');
       if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa8_on.png') {
         var img_off = $(this).attr('src').replace('on','off');
         $(this).attr('src',img_off);
         //横,調節しないとダメな箇所
         $(this).css('width','13%');
       } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa8_off.png') {
         var img_on = $(this).attr('src').replace('off','on');
         $(this).attr('src',img_on);
         $(this).css('transform','rotate(180deg)');
         //縦調節しないといけない場所
         $(this).css('width','24%');
       } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa8_on.png') {
         var img_off = $(this).attr('src').replace('on','off');
         $(this).attr('src',img_off);
         $(this).css('transform','rotate(180deg)');
         //調節しないといけない場所
         $(this).css('width','13%');
       } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa8_off.png') {
         var img_on = $(this).attr('src').replace('off','on');
         $(this).attr('src',img_on);
         $(this).css('transform','rotate(0deg)');
         //横,調節しないといけない場所
         $(this).css('width','24%');
       }

      });

      sofa7 = sofa7 + 1;
      $('#midorisofa' + (sofa7-1)).after('<img src="../images/sofa8_on.png" id="midorisofa' + sofa7 + '" class="furniture" width="24%" />');
     })
     var d_sofa7 = 1;
     var for_sofa7 = 1;
     $('#delete_sofa7').click(function() {
       for (var i=for_sofa7; i<sofa7; i++) {
         $('#midorisofa' + d_sofa7).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
         d_sofa7 = d_sofa7 + 1;
       }
       for_sofa7 = sofa7;
     })

     //ソファ8訂正する必要あり
     var sofa8 = 1;
   $('#add_sofa8').click(function() {
     $('#kurosofa' + sofa8).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
     // 回転
     $('#kurosofa' + sofa8).click(function(){
      var props = $(this).css('transform');
      var img = $(this).attr('src');
      if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa7_on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        //横,調節しないとダメな箇所
        $(this).css('width','10%');
      } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa7_off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(180deg)');
        //縦調節しないといけない場所
        $(this).css('width','23%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa7_on.png') {
        var img_off = $(this).attr('src').replace('on','off');
        $(this).attr('src',img_off);
        $(this).css('transform','rotate(180deg)');
        //調節しないといけない場所
        $(this).css('width','10%');
      } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa7_off.png') {
        var img_on = $(this).attr('src').replace('off','on');
        $(this).attr('src',img_on);
        $(this).css('transform','rotate(0deg)');
        //横,調節しないといけない場所
        $(this).css('width','23%');
      }
     });

     sofa8 = sofa8 + 1;
     $('#kurosofa' + (sofa8-1)).after('<img src="../images/sofa7_on.png" id="kurosofa' + sofa8 + '" class="furniture" width="23%" />');
    })
    var d_sofa8 = 1;
    var for_sofa8 = 1;
    $('#delete_sofa8').click(function() {
      for (var i=for_sofa8; i<sofa8; i++) {
        $('#kurosofa' + d_sofa8).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
        d_sofa8 = d_sofa8 + 1;
      }
      for_sofa8 = sofa8;
    })


    //ソファ9個

    var sofa9 = 1;
    $('#add_sofa9').click(function() {
      $('#yokosofa' + sofa9).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
      // 回転
      $('#yokosofa' + sofa9).click(function(){
       var props = $(this).css('transform');
       var img = $(this).attr('src');
       if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa9_on.png') {
         var img_off = $(this).attr('src').replace('on','off');
         $(this).attr('src',img_off);
         //横,調節しないとダメな箇所
         $(this).css('width','16.6%');
       } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/sofa9_off.png') {
         var img_on = $(this).attr('src').replace('off','on');
         $(this).attr('src',img_on);
         $(this).css('transform','rotate(180deg)');
         //縦調節しないといけない場所
         $(this).css('width','28.6%');
       } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa9_on.png') {
         var img_off = $(this).attr('src').replace('on','off');
         $(this).attr('src',img_off);
         $(this).css('transform','rotate(180deg)');
         //調節しないといけない場所
         $(this).css('width','16.6%');
       } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/sofa9_off.png') {
         var img_on = $(this).attr('src').replace('off','on');
         $(this).attr('src',img_on);
         $(this).css('transform','rotate(0deg)');
         //横,調節しないといけない場所
         $(this).css('width','28.6%');
       }

      });

      sofa9 = sofa9 + 1;
      $('#yokosofa' + (sofa9-1)).after('<img src="../images/sofa9_on.png" id="yokosofa' + sofa9 + '" class="furniture" width="28.6%" />');
     })
     var d_sofa9 = 1;
     var for_sofa9 = 1;
     $('#delete_sofa9').click(function() {
       for (var i=for_sofa9; i<sofa9; i++) {
         $('#yokosofa' + d_sofa9).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
         d_sofa9 = d_sofa9 + 1;
       }
       for_sofa9 = sofa9;
     })




    //その他


    //ゴミ箱1つめ
    var gomi = 1;
    $('#add_gomi').click(function() {
      $('#gomi' + gomi).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
      // 回転
      $('#gomi' + gomi).click(function(){
        var props = $(this).css('transform');
        var img = $(this).attr('src');
        if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/gomi1on.png') {
          var img_off = $(this).attr('src').replace('on','off');
          $(this).attr('src',img_off);
          //横,調節しないとダメな箇所
          $(this).css('width','10%');
        } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/gomi1off.png') {
          var img_on = $(this).attr('src').replace('off','on');
          $(this).attr('src',img_on);
          $(this).css('transform','rotate(180deg)');
          //縦調節しないといけない場所
          $(this).css('width','10%');
        } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/gomi1on.png') {
          var img_off = $(this).attr('src').replace('on','off');
          $(this).attr('src',img_off);
          $(this).css('transform','rotate(180deg)');
          //調節しないといけない場所
          $(this).css('width','10%');
        } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/gomi1off.png') {
          var img_on = $(this).attr('src').replace('off','on');
          $(this).attr('src',img_on);
          $(this).css('transform','rotate(0deg)');
          //横,調節しないといけない場所
          $(this).css('width','10%');
        }
      });

      gomi = gomi + 1;
      $('#gomi' + (gomi-1)).after('<img src="../images/gomi1on.png" id="gomi' + gomi + '" class="furniture" width="10%" />');
     })
     var d_gomi = 1;
     var for_gomi = 1;
     $('#delete_gomi').click(function() {
       for (var i=for_gomi; i<gomi; i++) {
         $('#gomi' + d_gomi).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
         d_gomi = d_gomi + 1;
       }
       for_gomi = gomi;
     })

//ゴミ箱2つめ
var trash = 1;
$('#add_trash').click(function() {
  $('#trash' + trash).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
   $('#trash' + trash).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/gomi2on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //横,調節しないとダメな箇所
      $(this).css('width','9%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/gomi2off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //縦調節しないといけない場所
      $(this).css('width','19%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/gomi2on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','9%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/gomi2off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //横,調節しないといけない場所
      $(this).css('width','19%');
    }
  });

  trash = trash + 1;
  $('#trash' + (trash-1)).after('<img src="../images/gomi2on.png" id="trash' + trash + '" class="furniture" width="19%" />');
 })

 var d_trash = 1;
 var for_trash = 1;
  $('#delete_trash').click(function() {
    for (var i=for_trash; i<trash; i++) {
      $('#trash' + d_trash).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_trash = d_trash + 1;
    }
    for_trash = trash;
  })

 //ゴミ箱3つめ

 var dust = 1;
$('#add_dust').click(function() {
  $('#dust' + dust).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  // 回転
   $('#dust' + dust).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/gomi3on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //横,調節しないとダメな箇所
      $(this).css('width','8%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/gomi3off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //縦調節しないといけない場所
      $(this).css('width','10%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/gomi3on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','8%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/gomi3off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //横,調節しないといけない場所
      $(this).css('width','10%');
    }
  });

  dust = dust + 1;
  $('#dust' + (dust-1)).after('<img src="../images/gomi3on.png" id="dust' + dust + '" class="furniture" width="10%" />');
 })
 var d_dust = 1;
 var for_dust = 1;
  $('#delete_dust').click(function() {
    for (var i=for_dust; i<dust; i++) {
      $('#dust' + d_dust).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_dust = d_dust + 1;
    }
    for_dust = dust;
  })

 //ガーデニング


 var tree = 1;
$('#add_1tree').click(function() {
  $('#1tree' + tree).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
  // 回転
   $('#1tree' + tree).click(function(){
    var props = $(this).css('transform');
    var img = $(this).attr('src');
    if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden1_on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      //横,調節しないとダメな箇所
      $(this).css('width','15%');
    } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden1_off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(180deg)');
      //縦調節しないといけない場所
      $(this).css('width','10%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden1_on.png') {
      var img_off = $(this).attr('src').replace('on','off');
      $(this).attr('src',img_off);
      $(this).css('transform','rotate(180deg)');
      //調節しないといけない場所
      $(this).css('width','15%');
    } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden1_off.png') {
      var img_on = $(this).attr('src').replace('off','on');
      $(this).attr('src',img_on);
      $(this).css('transform','rotate(0deg)');
      //横,調節しないといけない場所
      $(this).css('width','10%');
    }
  });

  tree = tree + 1;
  $('#1tree' + (tree-1)).after('<img src="../images/garden1_on.png" id="1tree' + tree + '" class="furniture" width="10%" />');
 })
 var d_tree = 1;
 var for_tree = 1;
  $('#delete_1tree').click(function() {
    for (var i=for_tree; i<tree; i++) {
      $('#1tree' + d_tree).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_tree = d_tree + 1;
    }
    for_tree = tree;
  })



 var tree1 = 1;
 $('#add_2tree').click(function() {
   $('#2tree' + tree1).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
    $('#2tree' + tree1).click(function(){
     var props = $(this).css('transform');
     var img = $(this).attr('src');
     if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden2_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       //横,調節しないとダメな箇所
       $(this).css('width','13%');
     } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden2_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(180deg)');
       //縦調節しないといけない場所
       $(this).css('width','10%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden2_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       $(this).css('transform','rotate(180deg)');
       //調節しないといけない場所
       $(this).css('width','13%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden2_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(0deg)');
       //横,調節しないといけない場所
       $(this).css('width','10%');
     }
   });

   tree1 = tree1 + 1;
   $('#2tree' + (tree1-1)).after('<img src="../images/garden2_on.png" id="2tree' + tree1 + '" class="furniture" width="10%" />');
  })
  var d_tree1 = 1;
  var for_tree1 = 1;
  $('#delete_2tree').click(function() {
    for (var i=for_tree1; i<tree1; i++) {
      $('#2tree' + d_tree1).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_tree1 = d_tree1 + 1;
    }
    for_tree1 = tree1;
  })




 var tree2 = 1;
 $('#add_3tree').click(function() {
   $('#3tree' + tree2).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
    $('#3tree' + tree2).click(function(){
     var props = $(this).css('transform');
     var img = $(this).attr('src');
     if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden4_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       //横,調節しないとダメな箇所
       $(this).css('width','10%');
     } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden4_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(180deg)');
       //縦調節しないといけない場所
       $(this).css('width','10.2%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden4_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       $(this).css('transform','rotate(180deg)');
       //調節しないといけない場所
       $(this).css('width','10%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden4_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(0deg)');
       //横,調節しないといけない場所
       $(this).css('width','10.2%');
     }
   });

   tree2 = tree2 + 1;
   $('#3tree' + (tree2-1)).after('<img src="../images/garden4_on.png" id="3tree' + tree2 + '" class="furniture" width="10.2%" />');
  })
  var d_tree2 = 1;
  var for_tree2 = 1;
  $('#delete_3tree').click(function() {
    for (var i=for_tree2; i<tree2; i++) {
      $('#3tree' + d_tree2).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_tree2 = d_tree2 + 1;
    }
    for_tree2 = tree2;
  })





  var tree3 = 1;
 $('#add_4tree').click(function() {
   $('#4tree' + tree3).css({'display':'block','position':'absolute', 'left':'0', 'top':'0'});
   // 回転
    $('#4tree' + tree3).click(function(){
     var props = $(this).css('transform');
     var img = $(this).attr('src');
     if((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden3_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       //横,調節しないとダメな箇所
       $(this).css('width','9%');
     } else if ((props == 'none' || props == 'matrix(1, 0, 0, 1, 0, 0)') && img == '../images/garden3_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(180deg)');
       //縦調節しないといけない場所
       $(this).css('width','16%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden3_on.png') {
       var img_off = $(this).attr('src').replace('on','off');
       $(this).attr('src',img_off);
       $(this).css('transform','rotate(180deg)');
       //調節しないといけない場所
       $(this).css('width','9%');
     } else if ((props == 'matrix(-1, 1.22465e-16, -1.22465e-16, -1, 0, 0)') && img == '../images/garden3_off.png') {
       var img_on = $(this).attr('src').replace('off','on');
       $(this).attr('src',img_on);
       $(this).css('transform','rotate(0deg)');
       //横,調節しないといけない場所
       $(this).css('width','16%');
     }
   });

   tree3 = tree3 + 1;
   $('#4tree' + (tree3-1)).after('<img src="../images/garden3_on.png" id="4tree' + tree3 + '" class="furniture" width="16%" />');
  })
  var d_tree3 = 1;
  var for_tree3 = 1;
  $('#delete_4tree').click(function() {
    for (var i=for_tree3; i<tree3; i++) {
      $('#4tree' + d_tree3).css({'display':'none','position':'absolute', 'left':'0', 'top':'0'});
      d_tree3 = d_tree3 + 1;
    }
    for_tree3 = tree3;
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



// 動的に追加した要素にもかかるように
  $('button').click(function() {
    $('.furniture').draggable({
      containment:".fro", //ドラッグの範囲を制限
      zIndex: "10",//ドラッグ中にのみかかるzindex
      drag: function(e, ui) {
        $(this).attr('class', 'drag');
      },
      stop: function(e, ui) {
        $(this).removeAttr('class','drag');
      }
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
  })


  // 間取りの大きさ変更
  $('#frosmall').click(function() {
    $(".fro").css('width','30%');
    $("#stylesheet").html('.shape::before {content: "";display: block;padding-top: 100%;}');
  })
  $('#froordinary').click(function() {
    $(".fro").css('width','34%');
    $("#stylesheet").html('.shape::before {content: "";display: block;padding-top: 100%;}');
  })
  $('#frobig').click(function() {
    $(".fro").css('width','38%');
    $("#stylesheet").html('.shape::before {content: "";display: block;padding-top: 100%;}');
  })

  $('#resmall').click(function() {
    $(".fro").css('width','30%');
    $("#stylesheet").html('.shape::before {content: "";display: block;padding-top: 70%;}');
  })
  $('#reordinary').click(function() {
    $(".fro").css('width','34%');
    $("#stylesheet").html('.shape::before {content: "";display: block;padding-top: 70%;}');
  })
  $('#rebig').click(function() {
    $(".fro").css('width','38%');
    $("#stylesheet").html('.shape::before {content: "";display: block;padding-top: 70%;}');
  })
});
