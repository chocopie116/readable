# 15章 [分/時間カウンタ]を設計・実装する

## 15.1 問題点


## 15.2 クラスのインターフェースを定義する

なぜ、 `MinuteHourCounter` なんてクラスにしたのか？  
わしなら、こうする！  

```php
interface CounterInterface
{
    public function add();
    public function count();
}

class MinuteCounter implements CounterInterface
{
    public function add()
    {
    }

    public function count()
    {
    }
}

class HourCounter implements CounterInterface
{
    public function add()
    {
    }

    public function count()
    {
    }
}
```

### 名前を改善する

`Observer` は、Observerパターンと混同するから避けたほうがいいのでは？  

### コメントを改善する

コメントよりメソッド名を改善したほうがいいんじゃないの？  
英語分からん。  
`MinuteCountFromMostRecent`  

## 15.3 試案1:素朴な解決案

追加することをイベントと捉える。  


## おまけ

有名な本 *ThoughtWorksアンソロジー*  

[オブジェクト指向エクササイズ](http://qiita.com/kiimiiis/items/dab7ebbcab640b4f2aa0)  

1. １つのメソッドにつきインデントは１段階までにすること
2. else句を使用しないこと
3. すべてのプリミティブ型と文字列型をラップすること
4. １行につきドットは１つまでにすること
5. 名前を省略しないこと
6. すべてのエンティティを小さくすること
7. １つのクラスにつきインスタンス変数は２つまでにすること
8. ファーストクラスコレクションを使用すること
9. Getter、Setter、プロパティを使用しないこと

あくまで、エクササイズで厳しいルールだから理解できるようになったら、型を破ってもいいよ的な温度感
