<span class="show__menu"><i class="fas fa-bars" data-aos="zoom-out" data-aos-delay="1200"></i></span>
                        <div class="menu">
                            <span class="close__menu"><i class="far fa-window-close"></i></span>
                            <ul class="menu-list bs-row">
                                @foreach($menu_nodes as $key => $row)
                                <li class="menu-list__item" data-aos="zoom-out" data-aos-delay="1200">
                                    <a href="{{ $row->getRelated()->url }}" target="{{ $row->target }}" class="menu-list__link @if ($row->getRelated()->url == Request::url())active @endif">{{ $row->getRelated()->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
