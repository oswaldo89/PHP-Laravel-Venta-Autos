<div class="top">
    <ul class="nav nav-tabs tooltip-demo">
        <li class="active"><a href="#">All Listings  <strong>432</strong></a>
        </li>
        <li><a href="#">Most Popular </a>
        </li>
        <li><a href="#">Recently Posted</a>
        </li>
        @if(Route::currentRouteName() == 'inicio')
            <li class="pull-right"><a href="{{URL::to('/listado')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="List View"><span class="glyphicon glyphicon-list"></span></a>
            </li>
            <li class="active pull-right"><a href="{{URL::to('/')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"><span class="glyphicon glyphicon-th"></span></a>
            </li>
        @else
            <li class="active pull-right"><a href="{{URL::to('/listado')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="List View"><span class="glyphicon glyphicon-list"></span></a>
            </li>
            <li class="pull-right"><a href="{{URL::to('/')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"><span class="glyphicon glyphicon-th"></span></a>
            </li>
        @endif
    </ul>
</div>



