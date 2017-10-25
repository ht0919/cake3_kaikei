# CakePHP による会計管理(v.0.1.0)

CakePHPの練習用に作成した会計管理システムです。現時点では経費帳の機能のみを実装しています。経費データは、勘定科目マスタを参照しています。このため経費データを登録する前に、あらかじめ勘定科目を登録する必要があります。

##  動作確認環境

1. OS : Windows10 Fall Creators Update
2. PHP : 7.1.7
3. MySQL : 10.1.25
4. CakePHP : 3.3.6

##  ダウンロードと起動方法

- MySQLサーバーを起動後に下記のコマンドを実行
```
$ git clone https://github.com/ht0919/cake3_kaikei.git
$ cd cake3_kaikei
$ bin/cake server
```

## アクセス方法

1. ブラウザを起動
2. アドレス欄に「[http://localhost:8765/keihis](http://localhost:8765/keihis)」と入力して経費一覧を表示

## データベースの構造

1. 科目マスター(kamoku) → 科目名
2. 経費データ(keihi) → 日付、科目ID、適用、金額
