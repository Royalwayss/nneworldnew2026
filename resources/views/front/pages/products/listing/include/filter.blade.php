<div class="col-lg-6 text-start">
          <button class="filter-toggle-btn" type="button" id="filterToggleBtn">
            Filters
          </button>
        </div>
        <div class="col-lg-6 text-end">
          <div class="sort-wrapper">
            <select class="sort-select" name="sort">
              <option value="">Sort By</option>
              <option value="default" @if($selected_sort=='default' ) selected @endif>Default</option>
              <option value="latest" @if($selected_sort=='latest' ) selected @endif>Latest</option>
              <option value="atoz" @if($selected_sort=='atoz' ) selected @endif>Name: A to Z</option>
              <option value="ztoa" @if($selected_sort=='ztoa' ) selected @endif>Name: Z to A</option>
            </select>
          </div>
        </div>
		@if(!empty($filters))
        <div class="col-xxl-3 col-md-12">
          <!-- Overlay for mobile -->
          <div class="filter-overlay" id="filterOverlay"></div>
          
          <!-- Filter Sidebar -->
          <aside class="filter-sidebar" id="filterSidebar">
            <div class="filter-header">
              <h4>Filters</h4>
              <button type="button" class="filter-close-btn" id="filterCloseBtn">×</button>
            </div>
            @foreach($filters as $filter)
            <div class="filter-item">
              <button class="filter-title" type="button">
                {{ $filter['name'] }}
                <span>+</span>
              </button>
              <div class="filter-content">
                @foreach($filter['values'] as $component_id =>$value)
                <label><input type="checkbox" class="filterAjax filterCheck" name="component-{{ $filter['id'] }}" value="{{ $component_id }}" @if(in_array($component_id,$selected_components)) checked @endif>{{ $value }}</label>
                @endforeach
              </div>
            </div>
            @endforeach

            <div class="filter-actions">
              <button type="button" class="clear-filter-btn">Clear All</button>
              <button type="submit" class="apply-filter-btn">Apply</button>
            </div>
          </aside>
		  
        </div>
        @endif
		