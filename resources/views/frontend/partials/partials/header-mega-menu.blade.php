<li class="dropdown-icon">
    <a href="javascript:void(0);">{!! $menu['label'] !!}</a>
    <ul>
        @if(count($menu['sub_menu']) > 30)
            @for($j = 0; $j < 4; $j++)
                
                @for($i = ($j * 10); $i < (($j + 1) * 10); $i++) 
                    @if(isset($menu['sub_menu'][$i]))
                        <li>
                            <a href="{!! $menu['sub_menu'][$i]['slug'] !!}">
                                {!! $menu['sub_menu'][$i]['label'] !!}
                            </a>
                        </li>
                    @endif
                @endfor
                
            @endfor
        @elseif(count($menu['sub_menu']) > 20)
            @for($j = 0; $j < 3; $j++)
                
                @for($i = ($j * 10); $i < (($j + 1) * 10); $i++) 
                    @if(isset($menu['sub_menu'][$i]))
                        <li>
                            <a href="{!! $menu['sub_menu'][$i]['slug'] !!}">
                                {!! $menu['sub_menu'][$i]['label'] !!}
                            </a>
                        </li>
                    @endif
                @endfor
                
            @endfor
        @elseif(count($menu['sub_menu']) > 10)
            @for($j = 0; $j < 2; $j++)
                
                @for($i = ($j * 10); $i < (($j + 1) * 10); $i++) 
                    @if(isset($menu['sub_menu'][$i]))
                        <li>
                            <a href="{!! $menu['sub_menu'][$i]['slug'] !!}">
                                {!! $menu['sub_menu'][$i]['label'] !!}
                            </a>
                        </li>
                    @endif
                @endfor
                
            @endfor
        @elseif(count($menu['sub_menu']) > 0)
            @for($j = 0; $j < 1; $j++)
                
                @for($i = ($j * 10); $i < (($j + 1) * 10); $i++) 
                    @if(isset($menu['sub_menu'][$i]))
                        <li>
                            <a href="{!! $menu['sub_menu'][$i]['slug'] !!}">
                                {!! $menu['sub_menu'][$i]['label'] !!}
                            </a>
                        </li>
                    @endif
                @endfor
                
            @endfor
        @endif 
    </ul>
</li>