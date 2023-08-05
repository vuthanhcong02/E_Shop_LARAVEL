            <form action="{{request()->segment(2) == 'product' ? '/shop' : ''}} ">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            @foreach($categories_name as $category)
                                <li class="{{request()->categoryName == $category->name ? 'active-category' : ''}}"><a href="/shop/category/{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            @foreach($brands as $brand)
                            <div class="bc-item">
                                <label for="bc-{{$brand->name}}">
                                    {{$brand->name}}
                                    <input type="checkbox" id="bc-{{$brand->name}}" 
                                    {{(request('brand')[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                                    name="brand[{{$brand->id}}]" 
                                    onchange="this.form.submit()">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount" name="p_min">
                                    <input type="text" id="maxamount" name="p_max">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" 
                            data-min="1" data-max="999"
                            data-min-value = "{{str_replace('$','',request('p_min'))}}"
                            data-max-value = "{{str_replace('$','',request('p_max'))}}"
                            >
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <button class="filter-btn" type="submit">Filter</button>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">coat</a>
                            <a href="#">dress</a>
                            <a href="#">jacket</a>
                            <a href="#">pants</a>
                            <a href="#">shirt</a>
                        </div>
                    </div>
                </form>