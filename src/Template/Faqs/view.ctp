
<div class="o-container">
    <div class="row o-flex o-justify-content--start">
        <div class="col-3">
            <!-- back to faq base -->
            <div class="u-mrg-b--20">
                <a href="<?= $this->Url->build(['controller' => 'faqs', 'action' => 'index']); ?>" class="u-font--16 u-font--500 u-fg--soft-black o-flex o-align-items--center">
                    <i class="fas fa-arrow-left"></i>
                    <span class="u-mrg-l--10">Kembali ke Pusat Informasi</span>
                </a>
            </div>
            <!-- select question -->
            <div class="nav nav-pills nav-gray o-flex--column" id="v-list-question" aria-orientation="vertical" role="tablist">
                <?php foreach($categories as $k=> $vals):?>
                    <?php
                        if($vals['id'] == $this->request->params['pass'][0]){
                            $active = 'active';
                        }else{
                            $active = '';
                        }
                    ?>
                    <a class="nav-link <?= $active;?>" href="<?= $this->Url->build(['controller' => 'faqs', 'action' => 'view', $vals['id']]); ?>" ><?php echo $vals['name'];?></a>
                <?php endforeach;?>
            </div>
        </div>

        <div class="col-9 c-faq-list">
            <!-- faq list -->
            <div class="tab-content" id="v-list-question__tabs">

                <?php foreach($categories as $k=> $vals):?>
                    <?php
                        if($vals['id'] == $this->request->params['pass'][0]){
                            $activeTab = 'show active';
                        }else{
                            $activeTab = '';
                        }
                    ?>

                    <div class="tab-pane fade <?= $activeTab;?>" id="<?php echo $this->Text->slug($vals['name'],'_');?>" role="tabpanel" aria-labelledby="v-list-<?php echo $k;?>">
                        <!-- start : accordion section -->
                        <div id="faq_<?php echo $this->Text->slug($vals['name'],'_');?>" class="c-accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach($faqs as $x => $val):?>
                        <?php if($val['faq_category']['name'] == $vals['name']):?>
                            <!-- answer question 1 -->
                            <div class="c-card c-faq-list--item">
                                <div class="c-card--header" role="tab" id="<?php echo $this->Text->slug($vals['name'],'_');?>_question<?php echo $x;?>">
                                    <h6 class="u-mrg-b--0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq_<?php echo $this->Text->slug($vals['name'],'_');?>_<?php echo $x;?>" aria-expanded="true" aria-controls="faq_<?php echo $this->Text->slug($vals['name'],'_');?>_<?php echo $x;?>" class="c-faq-list--title">
                                            <?php echo $val['judul'];?>
                                        </a>
                                    </h6>
                                </div>
                                <?php if($x == 0){$show = 'show';}else{$show='';}?>
                                <div id="faq_<?php echo $this->Text->slug($vals['name'],'_');?>_<?php echo $x;?>" class="collapse <?= $show;?>" role="tabpanel" aria-labelledby="<?php echo $this->Text->slug($vals['name'],'_');?>_question<?php echo $x;?>">
                                    <div class="c-card--body">
                                        <p class="c-faq-list--answer"><?php echo $val['content'];?> </p>

                                        <div class="c-faq-list--rating">
                                            <p class="u-mrg-r--20">Apakah topik ini membantu ?</p>

                                            <button class="c-btn c-btn--outline__gray c-btn--circle__sm u-mrg-r--5">
                                                <i class="far fa-thumbs-up"></i>
                                            </button>
                                            <button class="c-btn c-btn--outline__gray c-btn--circle__sm">
                                                <i class="far fa-thumbs-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif;?>
                        <?php endforeach;?>
                        </div>
                        <!-- end : accordion section -->
                    </div>
                <?php endforeach;?>


            </div>
        </div>
    </div>
</div>