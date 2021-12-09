
$(function(){
  // ベッドシリーズ
  // ベット１個目
  var buttonProductId = $('#add_bed1').val();
  $("#add_bed1").click(
    function(){
      $.ajax({
          // リクエストするサーバのプログラム
          url:'/IT42-117/control/ajax.php',
          // 通信種別
          type:'POST',
          // 転送データ
          data:{
              'add1':buttonProductId
          }
      }).done((data)=>{
        // レスポンスで受け取ったデータを処理する
        console.log(data);
      }).fail((data)=>{
        console.log(data);
      });
    });
    var buttondelete = $('#delete_bed1').val();
    $("#delete_bed1").click(
      function(){
        $.ajax({
            url:'/IT42-117/control/ajax.php',
            type:'POST',
            data:{
                'delete1':buttondelete,
            }
        }).done((data)=>{
          console.log(data);
        }).fail((data)=>{
          console.log(data);
        });
      });

// ここから下はぜんぶつめつめでコーディング
// つまり上が開いた状態
// ベット２個目
var buttonProductId = $('#add_bed2').val();
$("#add_bed2").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add2':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_bed2').val();
$("#delete_bed2").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete2':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ベット３個目
var buttonProductId = $('#add_bed2').val();
$("#add_bed3").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add3':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_bed3').val();
$("#delete_bed3").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete3':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ベット４個目
var buttonProductId = $('#add_bed4').val();
$("#add_bed4").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add4':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_bed4').val();
$("#delete_bed4").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete4':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ベット５個目
var buttonProductId = $('#add_bed5').val();
$("#add_bed5").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add5':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_bed5').val();
$("#delete_bed5").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete5':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ベット６個目
var buttonProductId = $('#add_bed6').val();
$("#add_bed6").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add6':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_bed6').val();
$("#delete_bed6").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete6':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});

// 椅子シリーズ
// 椅子１
var buttonProductId = $('#add_isu1').val();
$("#add_isu1").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add7':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_isu1').val();
$("#delete_isu1").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete7':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 椅子１
var buttonProductId = $('#add_isu2').val();
$("#add_isu2").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add8':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_isu2').val();
$("#delete_isu2").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete8':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 椅子１
var buttonProductId = $('#add_isu3').val();
$("#add_isu3").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add9':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_isu4').val();
$("#delete_isu4").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete9':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});


// テーブルシリーズ
// テーブル１
var buttonProductId = $('#add_table').val();
$("#add_table").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add10':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_table').val();
$("#delete_table").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete10':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// テーブル２
var buttonProductId = $('#add_longtable').val();
$("#add_longtable").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add11':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_longtable').val();
$("#delete_longtable").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete11':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// テーブル３
var buttonProductId = $('#add_shottable').val();
$("#add_shottable").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add12':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_shottable').val();
$("#delete_shottable").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete12':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// テーブル４
var buttonProductId = $('#add_blantable').val();
$("#add_blantable").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add13':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_blantable').val();
$("#delete_blantable").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete13':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// テーブル５
var buttonProductId = $('#add_whitetable').val();
$("#add_whitetable").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add14':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_whitetable').val();
$("#delete_whitetable").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete14':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// テーブル６
var buttonProductId = $('#add_1table').val();
$("#add_1table").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add15':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_1table').val();
$("#delete_1table").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete15':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});


// 収納シリーズ
// 収納１
var buttonProductId = $('#add_kitichen').val();
$("#add_kitichen").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add16':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_kitichen').val();
$("#delete_kitichen").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete16':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納２
var buttonProductId = $('#add_shed').val();
$("#add_shed").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add17':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_shed').val();
$("#delete_shed").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete17':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納３
var buttonProductId = $('#add_chest').val();
$("#add_chest").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add18':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_chest').val();
$("#delete_chest").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete18':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納４
var buttonProductId = $('#add_hondana').val();
$("#add_hondana").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add19':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_hondana').val();
$("#delete_hondana").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete19':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納５
var buttonProductId = $('#add_sirotana').val();
$("#add_sirotana").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add20':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sirotana').val();
$("#delete_sirotana").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete20':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納６
var buttonProductId = $('#add_siromini').val();
$("#add_siromini").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add21':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_siromini').val();
$("#delete_siromini").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete21':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納７
var buttonProductId = $('#add_1tana').val();
$("#add_1tana").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add22':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_1tana').val();
$("#delete_1tana").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete22':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納８
var buttonProductId = $('#add_2tana').val();
$("#add_2tana").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add23':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_2tana').val();
$("#delete_2tana").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete23':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// 収納９
var buttonProductId = $('#add_3tana').val();
$("#add_3tana").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add24':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_3tana').val();
$("#delete_3tana").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete24':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});


// ソファーシリーズ
// ソファー１
var buttonProductId = $('#add_sofa1').val();
$("#add_sofa1").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add25':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa1').val();
$("#delete_sofa1").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete25':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー２
var buttonProductId = $('#add_sofa2').val();
$("#add_sofa2").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add26':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa2').val();
$("#delete_sofa2").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete26':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー３
var buttonProductId = $('#add_sofa3').val();
$("#add_sofa3").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add27':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa3').val();
$("#delete_sofa3").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete27':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー４
var buttonProductId = $('#add_sofa4').val();
$("#add_sofa4").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add28':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa4').val();
$("#delete_sofa4").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete28':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー５
var buttonProductId = $('#add_sofa5').val();
$("#add_sofa5").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add29':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa5').val();
$("#delete_sofa5").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete29':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー６
var buttonProductId = $('#add_sofa6').val();
$("#add_sofa6").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add30':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa6').val();
$("#delete_sofa6").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete30':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー７
var buttonProductId = $('#add_sofa7').val();
$("#add_sofa7").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add31':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa7').val();
$("#delete_sofa7").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete31':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー８
var buttonProductId = $('#add_sofa8').val();
$("#add_sofa8").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add32':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa8').val();
$("#delete_sofa8").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete32':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// ソファー９
var buttonProductId = $('#add_sofa9').val();
$("#add_sofa9").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add33':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_sofa9').val();
$("#delete_sofa9").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete33':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});


// その他シリーズ
// その他１
var buttonProductId = $('#add_gomi').val();
$("#add_gomi").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add34':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_gomi').val();
$("#delete_gomi").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete34':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// その他２
var buttonProductId = $('#add_trash').val();
$("#add_trash").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add35':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_trash').val();
$("#delete_trash").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete35':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// その他３
var buttonProductId = $('#add_dust').val();
$("#add_dust").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add36':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_dust').val();
$("#delete_dust").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete36':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// その他４
var buttonProductId = $('#add_1tree').val();
$("#add_1tree").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add37':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_1tree').val();
$("#delete_1tree").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete37':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// その他５
var buttonProductId = $('#add_2tree').val();
$("#add_2tree").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add38':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_2tree').val();
$("#delete_2tree").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete38':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// その他６
var buttonProductId = $('#add_3tree').val();
$("#add_3tree").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add39':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_3tree').val();
$("#delete_3tree").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete39':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
// その他７
var buttonProductId = $('#add_4tree').val();
$("#add_4tree").click(function(){$.ajax({url:'/IT42-117/control/ajax.php',
type:'POST',
data:{'add40':buttonProductId}
}).done((data)=>{console.log(data);}).fail((data)=>{console.log(data);});});
var buttondelete = $('#delete_4tree').val();
$("#delete_4tree").click(
function(){$.ajax({url:'/IT42-117/control/ajax.php',type:'POST',
data:{'delete40':buttondelete,}}).done((data)=>{console.log(data);}).fail((data)=>{
console.log(data);});});
});
