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
                                    <!-- Group 1 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Job Type</div>
                                        <ul class="czodn">
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Full-time</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Part-time</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Intership</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Contract / Freelance</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Co-founder</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Group 2 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Job Roles</div>
                                        <ul class="czodn">
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja" checked="">
                                                    <span class="cvhuf cf37z cm87k">Programming</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Design</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Management / Finance</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Customer Support</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Sales / Marketing</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Group 3 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Remote Only</div>
                                        <div class="c8og8 cduop" x-data="{ checked: false }">
                                            <div class="cumo3">
                                                <input type="checkbox" id="remote-toggle" class="cxbaz" x-model="checked">
                                                <label class="cg72j" for="remote-toggle">
                                                    <span class="cz0l8 ctpla" aria-hidden="true"></span>
                                                    <span class="cxbaz">Remote Only</span>
                                                </label>
                                            </div>
                                            <div class="cvhuf cf37z c75bs ccyd8" x-text="checked ? 'On' : 'Off'"></div>
                                        </div>
                                    </div>
                                    <!-- Group 3 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Salary Range</div>
                                        <ul class="czodn">
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">$20K - $50K</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">$50K - $100K</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">&gt; $100K</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="c8og8 cduop">
                                                    <input type="checkbox" class="cicja">
                                                    <span class="cvhuf cf37z cm87k">Drawing / Painting</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Group 4 -->
                                    <div>
                                        <div class="cd67x cf37z c3774 cznhr">Location</div>
                                        <label class="cxbaz">Location</label>
                                        <select class="coiqx cn582">
                                            <option>Anywhere</option>
                                            <option>London</option>
                                            <option>San Francisco</option>
                                            <option>New York</option>
                                            <option>Berlin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </aside>

                    <!-- Main content -->
                  <livewire:category.paython/>

                </div>
                </div>
        </div>
    </section>
@endsection