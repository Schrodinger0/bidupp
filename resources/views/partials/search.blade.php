<form class="ps-search--header" action="{{ route('products.search') }}">
    <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}"  placeholder="Search Product…">
   <button type="submit" ><i class="ps-icon-search"></i></button>

</form>