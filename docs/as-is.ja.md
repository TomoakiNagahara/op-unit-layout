# Layout As-Is

## 対象範囲

この文書は、Layout unit の現行 As-Is 挙動と責務境界を説明します。

## 主責務

Layout unit は、layout 実行が有効なときに、最終的な shared page framing を担当します。

この unit の役割は、routing target を決めることでも、endpoint の business logic を実行することでもありません。

すでに準備された application content に対して、layout 出力を適用することが役割です。

## 現行 flow

現行実装では、`Layout::Auto()` は次を行います。

1. layout config を読む
2. layout 実行が有効かを確認する
3. current MIME が `text/html` かを確認する
4. layout を実行しない場合は App content をそのまま出力する
5. layout を実行する場合は、設定された layout controller を読み込む

## 責務の境界

Layout unit の責務は次です。

- 現在の layout config と current MIME をもとに layout 実行を継続するか判断する
- 設定された layout controller を読み込む
- HTML output に対する最終 shared wrapper stage を提供する

Layout unit の責務ではないものは次です。

- どの endpoint を実行するか決めること
- router resolution を実行すること
- content が存在する前の application flow を決めること

## App unit との関係

App unit は、application flow が layout stage に到達したときに Layout unit を呼び出します。

App unit は application flow management を担当します。

Layout unit は最終的な layout behavior 自体を担当します。

## 設定面

現行 Layout unit は framework config system を通じて次を読みます。

- `layout.name`
- `layout.controller`
- `layout.execute`

また、layout state を動的に制御するために次を提供します。

- `Name()`
- `Execute()`

## 意味

重要な境界は次です。

- App がいつ Layout へ handoff するかを決める
- Layout が shared final framing をどう適用するかを決める
