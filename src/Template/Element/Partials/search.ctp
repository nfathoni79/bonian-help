
<!-- faq banner -->
<img class="u-img--fluid" src="<?= $this->Url->build('/images/jpeg/bg-header/bg_header.jpg'); ?>" alt="banner image">

<!-- faq overlay block -->
<div class="c-faq--overlay">
    <div class="o-container u-txt--center">
        <!-- faq title -->
        <h1 class="u-font--40 u-font--600 u-fg--white u-txt--uppercase u-mrg-b--30">Cari Bantuan Disini</h1>
        <!-- faq search bar -->
        <div class="o-flex o-justify-content--center">
            <div class="c-faq-searchbar__section">
                <div class="c-faq-searchbar c-faq-searchbar--focus">
                    <div class="c-faq-searchbar__main" style="position: relative;">
                        <!-- input form -->
                        <form role="search" class="c-faq-searchbar-input" autocomplete="off" action="">
                            <input aria-label="Cari bantuan yang anda butuhkan ..." class="c-faq-searchbar-input__txt" maxlength="128" placeholder="Cari bantuan yang anda butuhkan ..." autocomplete="off" type="text" value="">
                        </form>
                        <!-- submit button -->
                        <button type="button" class="c-btn c-btn-solid--red c-btn--inline c-btn--faq__search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq search bar -->
    </div>
</div>