@extends('frontend.layout.app')
@section('main-content')
    <!-- Page content -->
    <section>
        <div class="cfd1l cnsl7 cwkz1 cwkio">
            <div class="coh2n cm5ip">
                <div class="cwa15 ceiqu">
                    <!-- Sidebar -->
                    <aside class="cjx7n crf2m cc7q4 ctnpq cmvfi cu2gg cfh68 cy519">
                        <div class="c5uys ctbeu">

                            <div class="cwq9z c7z1d cqwhl czhnl c2cn0 ck73f">

                                <div class="c6kdq cv23o cx5ip cv5zz">
                                    <button class="cf37z c4vrg cw2fq c4von">Clear</button>
                                </div>

                                <div class="c8dcm c3ma2 cx1zb cr8k3"> 
                                    <!-- Group 3 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Remote Only</div>
                                        <div class="c8og8 cduop" x-data="{ checked: false }">
                                            <div class="cumo3">
                                                <input class="cxbaz" id="remote-toggle" type="checkbox" x-model="checked">
                                                <label class="cg72j" for="remote-toggle">
                                                    <span class="cz0l8 ctpla" aria-hidden="true"></span>
                                                    <span class="cxbaz">Remote Only</span>
                                                </label>
                                            </div>
                                            <div class="cvhuf cf37z c75bs ccyd8" x-text="checked ? 'On' : 'Off'"></div>
                                        </div>
                                    </div>
                                    <!-- Group 3 -->                     
                                </div>
                            </div>

                        </div>
                    </aside>

                    <!-- Main content -->
                  <livewire:home-feed />
            </div>
        </div>
    </section>
@endsection
