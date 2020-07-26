<!--<form id="searchBar" class="ps-search--header" action="{{ route('products.search') }}">
    <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}"  placeholder="Search Product…">
   <button type="submit" ><i class="ps-icon-search"></i></button>

</form>-->
<!--<form id="searchBar" style="float: left; margin-top: 20px;width:calc(100% - 100px)" action="{{ route('products.search') }}">-->
<form id="searchBar" class="searchBar" action="{{ route('products.search') }}">
    <input type="text" style="border-radius: 30px;width: 100%;" name="q" class="form-control" value="{{ request()->q ?? '' }}"  placeholder="Search Product…">
   <button style="float: right;margin-top: -35px;border-width: 0px;background-color: transparent;" type="submit" ><i class="ps-icon-search"></i></button>
</form>