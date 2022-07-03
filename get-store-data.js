

function removeDuplicate(x)
{
  var a = x.split(',');
  var x2 = [];
  for (var i in a)
      if(x2.indexOf(a[i]) == -1) x2.push(a[i])
  return  x2.join(',');
}


function generate_tags()
{
    for(i=1;i<$('table tr').size();i++)
    {
//      alert(i);
      var word =     $('table tr').eq(i).find('td').eq(2).html();
      var tags ='';

      tags += (word.includes('白雪姫')) ? 'snow white ,' : '';
      tags += (word.includes('ピーター')) ? 'pinocchio ,' : '';
      tags += (word.includes('ティモシー')) ? 'dumbo ,' : '';
      tags += (word.includes('ミッキー')) ? 'mickey ,' : '';
      tags += (word.includes('ミニー')) ? 'minnie ,' : '';
      tags += (word.includes('ドナルド')) ? 'donald ,' : '';
      tags += (word.includes('プーさん')) ? 'pooh ,' : '';
      tags += (word.includes('チップ')) ? 'chip and dale ,' : '';
      tags += (word.includes('デール')) ? 'chip and dale ,' : '';
      tags += (word.includes('ラプンツェル')) ? 'rapunzel ,' : '';
      tags += (word.includes('アリエル')) ? 'ariel ,' : '';
      tags += (word.includes('トイ・ストーリー')) ? 'toystory ,' : '';
      tags += (word.includes('トイストーリー')) ? 'toystory ,' : '';
      tags += (word.includes('レックス')) ? 'toystory ,' : '';
      tags += (word.includes('ウッディ')) ? 'toystory ,' : '';
      tags += (word.includes('バズ')) ? 'toystory ,' : '';
      tags += (word.includes('エイリアン')) ? 'toystory ,' : '';
      tags += (word.includes('ロッツォ')) ? 'toystory ,' : '';
      tags += (word.includes('マリー')) ? 'marie ,' : '';
      tags += (word.includes('スティッチ')) ? 'stitch ,' : '';
      tags += (word.includes('スクランプ')) ? 'stitch ,' : '';
      tags += (word.includes('チェシャ猫')) ? 'alice ,' : '';
      tags += (word.includes('白うさぎ')) ? 'alice ,' : '';
      tags += (word.includes('アリス')) ? 'alice ,' : '';
      tags += (word.includes('ヤングオイスター')) ? 'alice ,' : '';
      tags += (word.includes('ジーニー')) ? 'jasmine ,' : '';
      tags += (word.includes('バンビ')) ? 'bambi ,' : '';
      tags += (word.includes('ダンボ')) ? 'dumbo ,' : '';
      tags += (word.includes('モンスターズ・インク')) ? 'monster university ,' : '';
      tags += (word.includes('マイク')) ? 'monster university ,' : '';
      tags += (word.includes('サリー')) ? 'monster university ,' : '';
      tags += (word.includes('ティンカー・ベル')) ? 'tinkerbell ,' : '';
      if(!word.includes('ティンカー・ベル'))
        {
        tags += (word.includes('ベル')) ? 'belle ,' : '';

        }

      tags += (word.includes('シンデレラ')) ? 'cinderella ,' : '';
      tags += (word.includes('ベイマックス')) ? 'baymax ,' : '';
      tags += (word.includes('フランダー')) ? 'ariel ,' : '';
      tags += (word.includes('エルサ')) ? 'frozen ,' : '';
      tags += (word.includes('アナ')) ? 'frozen ,' : '';
      tags += (word.includes('美女と野獣')) ? 'belle ,' : '';
      tags += (word.includes('野獣')) ? 'belle ,' : '';
      tags += (word.includes('ジャスミン')) ? 'jasmine ,' : '';
      tags += (word.includes('セバスチャン')) ? 'ariel ,' : '';
      tags += (word.includes('ジャック')) ? 'jack ,' : '';
      tags += (word.includes('とんすけ')) ? 'bunny ,' : '';
      tags += (word.includes('ポテトヘッド')) ? 'toystory ,' : '';
      tags += (word.includes('プルート')) ? 'pluto ,' : '';
      tags += (word.includes('ピグレット')) ? 'pooh ,' : '';
      tags += (word.includes('グーフィー')) ? 'goofy ,' : '';
      tags += (word.includes('バニー')) ? 'bambi ,' : '';
      tags += (word.includes('デイジー')) ? 'daisy ,' : '';
      tags += (word.includes('レディ')) ? 'lady ,' : '';
      tags += (word.includes('ユニベアシティ')) ? 'unibear ,' : '';


      tags = tags.substring(0, tags.length - 1);

      tags=removeDuplicate(tags);

      $('table tr').eq(i).find('td').eq(16).html(tags);
      console.log(i);

    }
}




function translate()
{

  	var replaced;

  	replaced = $("body").html()
  		.replace(/ぬいぐるみ/g,'毛公仔')
  		.replace(/アリス/g,'愛麗絲 Alice')
  		.replace(/白うさぎ/g,'時間兔')
  		.replace(/キーホルダー・キーチェーン/g,'匙扣 Keychain')
  		.replace(/イヤリング/g,'earrings 耳環(夾)')
  		.replace(/ピアス/g,'earrings 耳環(針)')
  		.replace(/ディズニーストア/g,'Disneystore')
  		.replace(/ディズニー/g,'迪士尼 Disney')
  		.replace(/バッグチャーム/g,'Bag Charm')
  		.replace(/プレート/g,'碟 Plate')
  		.replace(/セット/g,'Set')
  		.replace(/ミラー・鏡/g,'鏡 Mirror')
  		.replace(/財布・ウォレット/g,'銀包 Wallet')
  		.replace(/指輪・リング/g,'戒指 Ring')
  		.replace(/トートバッグ/g,'Totebag')
  		.replace(/スマホケース・カバー/g,'Smartphone case cover')
  		.replace(/ポーチ・小物入れ/g,'小型 Pouch')
  		.replace(/アリエル/g,'艾莉奧 小魚仙 Ariel')
  		.replace(/チップ/g,'Chip')
  		.replace(/デール/g,'Dale')
  		.replace(/ドナルド/g,'唐老鴨 Donald')
  		.replace(/ジャスミン/g,'茉莉公主 Jasmine')
  		.replace(/ランチバッグ/g,'飯袋 Lunch Bag')
  		.replace(/マグカップ/g,'水杯 Mug Cup')
  		.replace(/マッドハッター/g,'瘋帽子 Mad Hatter')
  		.replace(/スノードーム/g,'水晶球')
  		.replace(/ヘアブラシ/g,'梳 Brush')
  		.replace(/折りたたみ式/g,'可摺式')
  		.replace(/ユニベアシティ/g,'Unibearsity')
  		.replace(/スター・ウォーズ/g,'星球大戰 star wars')
  		.replace(/ミニタオル/g,'小毛巾 Mini Towel')
  		.replace(/カメラストラップ/g,'相機帶')
  		.replace(/コスチューム/g,'衣服')
  		.replace(/ボールペン/g,'原子筆 ballpen')
  		.replace(/腕時計・ウォッチ/g,'手錶 Watch')
  		.replace(/帽子・ハット/g,'帽子 Hat')
  		.replace(/ステンレスボトル/g,'保溫樽 Stainless steel bottle')
  		.replace(/リュックサック・バックパック/g,'背包 背囊 Backpack')
  		.replace(/メモ帳/g,'便條 Memo')
  		.replace(/ネックレス/g,'頸鍊 Necklace')
  		.replace(/スティッチ/g,'史迪仔 Stitch')
  		.replace(/ヘアピン/g,'髮夾')
  		.replace(/筆箱・ペンケース/g,'Pen Case')
  		.replace(/ポストカード/g,'Postcard')
  		.replace(/ピーター・パン/g,'Peter Pan')
  		.replace(/トイ・ストーリー/g,'反斗奇兵 玩具總動員 Toystory')
  		.replace(/ロッツォ・ハグベア/g,'勞蘇 熊抱哥 Lotso')
  		.replace(/エイリアン/g,'三眼仔 三眼怪 Alien')
  		.replace(/リトル・グリーン・メン/g,'Little Green Man')
  		.replace(/パスケース/g,'Pass Holder・八達通套卡套 Pass Case')
  		.replace(/プー&フレンズ/g,'小熊維尼 Pooh And Friend')
  		.replace(/プー/g,'小熊維尼 Pooh')
  		.replace(/ラプンツェル/g,'長髮公主 Rapunzel')
  		.replace(/ネイルシール/g,'甲貼 Nail Seal')
  		.replace(/ショッピングバッグ・エコバッグ/g,'環保袋 Shopping Bag Ecobag')
  		.replace(/ティンカー・ベル/g,'小仙女 小仙子 Tinkerbell')
  		.replace(/チョコレート/g,'朱古力 Chocolate')
  		.replace(/ボウル/g,'碗 Bowel')
  		.replace(/シークレット/g,'Random 款')
  		.replace(/フェイスマスク/g,'Mask 臉膜')
  		.replace(/フェイスパックシート/g,'Mask 臉膜')
  		.replace(/ピンバッジ/g,'Pin badge')
  		.replace(/コップ/g,'水杯 Cup')
  		.replace(/ウォールステッカー/g,'牆貼 Wall sticker')
  		.replace(/マット/g,'地顫')
  		.replace(/マイク/g,'大眼仔 Mike')
  	//	.replace(/サリー/g,'毛毛 sully')
  		.replace(/ミニー/g,'米妮 Minnie')
  		.replace(/ミッキー/g,'米奇 Mickey')
  		.replace(/ピグレット/g,'小豬 Piglet')
  		.replace(/フレンズ/g,'Friends')
  		.replace(/ヘアポニー/g,'髮圈 Hairband')
  		.replace(/シュシュ/g,'髮圈 Hairband')
  		.replace(/シンデレラ/g,'灰姑娘 Cinderella')
  		.replace(/リトル・マーメイド/g,'Little Mermaid')
  		.replace(/デイジー/g,'黛西 Daisy')
  		.replace(/ジャック/g,'Jack')
  		.replace(/ゼロ/g,'Zero')
  		.replace(/ダンボ/g,'小飛象 Dumbo')
  		.replace(/下敷/g,'枱墊')
  		.replace(/シール・ステッカー/g,'Seal Sticker 貼紙')
  		.replace(/タオル/g,'毛巾')
  		.replace(/パーカー/g,'外套')
  		.replace(/マリー/g,'瑪莉貓 Marie')
  		.replace(/美女と野獣/g,'美女與野獣')
  		.replace(/ベル/g,'貝兒 Belle')
  		.replace(/ベイマックス/g,'Baymax')
  		.replace(/ヤングオイスター/g,'生蠔BB');

  	$("body").html(replaced);

}






$(function(){
  generate_tags();
  translate();





})
