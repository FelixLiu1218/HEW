HEW2のファイルが2つあることについて

退会処理はもともと論理削除しようとしたが、時間がなくてできなかった。
物理削除の方はもともと知っていたので、HEW2_level2のSQLファイルの中のAlterにON DELETE CASCADEとON UPDATE CASCADEを付与して
親テーブルと子テーブルの外部キー関連で一括で削除できるようにした。こっちの方が楽。。。。

従来は、外部制約のせいで

「親テーブルのレコードを消す！！」

「エラー！！」

理由：
「子テーブルにあんたのレコードのフィールド（カラム）の一部あるから
消したら、親が存在しないゴミカラムデータがうちのレコードに残るで。」

って感じね。
ON DELETE CASCADEとON UPDATE CASCADEはそんな壁を

「じゃあ、同時に子テーブルの内容も消せばよくね？」
で済まそうという脳筋戦法の事を言う。

使うには使うらしいが、ケースバイケースである。
通称、「物理削除」



つまり、本当は論理削除した方が絶対良い。

なので、HEW2_level1のSQLファイルを残しておく。
これがもともとのオリジナルファイルで

ON UPDATE RESTRICT　と　ON DELETE RESTRICTで

外部キー関連のテーブル間で親テーブルと
子テーブルで
どちらかのレコードを削除しようとすると参照チェックエラーを起こして
安易に削除できないようにしている。

論理削除はいかに、こういった壁を乗り越えて、効率よくレコードを乱さずに
削除するかが試される技術だと考える。
なので、頑張って(-。-)y-゜゜゜
