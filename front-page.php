<?php get_header(); ?>
    <section class="section-contents" id="shop">
      <div class="wrapper">
<?php
$shop_obj = get_page_by_path( 'shop' );
$post = $shop_obj;
setup_postdata( $post );
$shop_title = get_the_title();
?>
        <span class="section-title-en">Shop Information</span>
        <h2 class="section-title"><?php the_title(); ?></h2>
        <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
<?php wp_reset_postdata(); ?>
        <ul class="shops">
<?php
$shop_pages = get_child_pages( -1, $shop_obj->ID );
if ( $shop_pages->have_posts() ) :
  while ( $shop_pages->have_posts() ) : $shop_pages->the_post();
?>
          <li class="shops-item">
            <a class="shop-link" href="<?php the_permalink(); ?>">
              <div class="shop-image"><?php the_post_thumbnail( 'common' ); ?></div>
              <div class="shop-body">
                <p class="name"><?php the_title(); ?></p>
                <p class="location"></p>
                <div class="buttonBox">
                  <button type="button" class="seeDetail">MORE</button>
                </div>
              </div>
            </a>
          </li>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>
        </ul>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            店舗情報一覧を見る
          </button>
        </div>
      </div>
    </section>
    <section class="section-contents" id="contribution">
      <div class="wrapper">
        <span class="section-title-en">Regional Contribution</span>
        <h2 class="section-title">地域貢献活動</h2>
        <p class="section-lead">人と地域を結ぶ活動を行っております</p>
        <div class="articles">
          <article class="article-card">
            <a class="card-link" href="#">
              <div class="card-inner">
                <div class="card-image">
	                <img src="#" alt="" />
                </div>
                <div class="card-body">
                  <p class="title">街のちびっこダンス大会</p>
                  <p class="excerpt">2022年8月大手町モールにて「街のちびっこダンス大会」を開催しました。近年はダンス教室に通うお子様も多く、お子様同士や親御様同士の交流の場となればと思い企画いたしました。</p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
          <article class="article-card">
            <a class="card-link" href="#">
              <div class="card-inner">
                <div class="card-image">
	                <img src="#" alt="" />
                </div>
                <div class="card-body">
                  <p class="title">都市カンファレンス</p>
                  <p class="excerpt">新しい都市の構想を考える LAモールでは2022年8月20日、モール周辺のロサンゼルスの新しい都市構想について、モールにいらっしゃったお客様と考えるカンファレンスを開催いたしました。</p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
          <article class="article-card">
            <a class="card-link" href="#">
              <div class="card-inner">
                <div class="card-image">
	                <img src="#" alt="" />
                </div>
                <div class="card-body">
                  <p class="title">タムリンフェスティバル</p>
                  <p class="excerpt">今年もタムリンフェスティバルは大盛況 2022年9月にインドネシアのタムリンホールにて「タムリンフェスティバル」を開催しました。</p>
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
        </div>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            地域貢献活動一覧を見る
          </button>
        </div>
      </div>
    </section>
    <section class="section-contents" id="news">
      <div class="wrapper">
        <span class="section-title-en">News Release</span>
        <h2 class="section-title">ニュースリリース</h2>
        <p class="section-lead">パシフィックモール開発の最新情報をお送りします</p>
        <ul class="news">
          <li class="news-item">
            <a class="detail-link" href="#">
              <time class="time">2023.01.14</time>
              <p class="title">インド 消費者向けアプリのMecha-Indiaと業務提携開始</p>
              <p class="news-text">パシフィックモール株式会社（以下、当社）は、インド共和国（以下、インド）において、Mecha-India（以下、メカ・インディア）との協業を開始します。 Mecha-Indiaは、インドにおける配車サービス大手であり、電 [&hellip;]</p>
            </a>
          </li>
          <li class="news-item">
            <a class="detail-link" href="#">
              <time class="time">2022.12.17</time>
              <p class="title">年末年始休業のお知らせ</p>
              <p class="news-text">お客様　各位 師走の候、貴社ますますご清祥のこととお喜び申し上げます。 平素は格別のご高配を賜り、厚くお礼申し上げます。 さて、本年（令和3年）の年末年始は、下記の通り休業させていただきますので、よろしくお願いいたしま [&hellip;]</p>
            </a>
          </li>
          <li class="news-item">
            <a class="detail-link" href="#">
              <time class="time">2022.11.15</time>
              <p class="title">米国ニューヨーク・パークアベニューモール 美術館 「The Art of Park Ave.」にて、特設イベント「世界の若手美術展」を開催</p>
              <p class="news-text">美術館「The Art of Park Ave.」は、若手芸術家の作品を展示している美術館としてはニューヨーク最大規模で、常時約5,000点の作品を展示しています。 この度、2021年11月30日&#12316;2022年1月31日の [&hellip;]</p>
            </a>
          </li>
        </ul>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            ニュースリリース一覧を見る
          </button>
        </div>
      </div>
    </section>
    <section class="section-contents" id="company">
      <div class="wrapper">
        <span class="section-title-en">Corporate Information</span>
        <h2 class="section-title">企業情報</h2>
        <p class="section-lead">
          私たちパシフィックモール開発は、<br />
          ショッピングモール開発を通じて新たな価値を創造し<br />
          社会に貢献するグローバルな企業を目指します。
        </p>
        <div class="section-buttons">
          <button type="button" class="button button-ghost" onclick="javascript:location.href = '#';">
            企業情報を見る
          </button>
        </div>
      </div>
    </section>
<?php get_footer();
