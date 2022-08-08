<form
    class="search-form"
    role="search"
    method="get"
    id="searchform"
    action="<?php echo home_url('/') ?>"
>
    <input
        class="search-form__input"
        type="text"
        value="<?php echo get_search_query() ?>"
        name="s" id="s"
        placeholder="поиск"
        autocomplete="off"
    />
    <button type="submit" id="searchsubmit">
        
    </button>
    <ul class="ajax-search"></ul>
</form>