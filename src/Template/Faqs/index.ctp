
<!-- side #1 -->
<div class="o-container c-faq-content--topic">
    <!-- faq intro -->
    <h6 class="u-font--18 u-font--600 u-fg--soft-black">Pilih topik yang sesuai dengan masalah anda</h6>
    <!-- faq topic item -->
    <div class="c-faq-content--topic__select">
        <?php foreach($categories as $k=>$vals):?>
            <a href="<?= $this->Url->build(['controller' => 'faqs', 'action' => 'view', $vals['id']]); ?>" class="c-faq-content--topic-item">
                <div class="c-faq--topic-item__card">
                    <img class="u-img--fluid" src="<?= $this->Url->build('/images/icon/' . ($k+1).'.png'); ?>" alt="faq item <?php echo $vals['name'];?>">
                    <p><?php echo $vals['name'];?></p>
                </div>
            </a>
        <?php endforeach;?>
    </div>
</div>
<!-- side #1 -->

<!-- side #2 -->
<div class="o-container c-faq-content__read-more">
    <div class="row no-gutters c-faq-content__read-more__layout">
        <!-- intro image -->
        <div class="col-2">
            <img class="u-img--fluid" src="<?= $this->Url->build('/images/icon/faqs.png'); ?>" alt="icon question">
        </div>

        <!-- intro text -->
        <div class="col-3 o-flex o-justify-content--center">
            <div>
                <h3 class="u-font--18 u-font--600 u-fg--soft-black u-txt--uppercase u-mrg-b--10">Frequenly Asked Question</h3>
                <p class="u-font--12 u-font--500 u-fg--gray">Temukan semua jawaban dari pertanyaan seputar zolaku</p>
            </div>
        </div>

        <!-- button read more -->
        <div class="col-2 o-flex o-justify-content--end">
            <a href="<?= $this->Url->build(['controller' => 'faqs', 'action' => 'view', 1]); ?>" class="c-btn c-btn--red">Lihat Selengkapnya</a>
        </div>
    </div>
</div>
<!-- side #2 -->