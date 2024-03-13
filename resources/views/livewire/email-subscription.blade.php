<div>
    <div class="coscr cokkt czhnl coh2n">
        <div class="cwq9z cwkz1 c0qn4 czbam c6kou">
             <div class="c6kdq cjxga c8f1b c3soh c7z1d cqwhl czhnl c2cn0 cww2f comjk cmwpt cjlhc" aria-hidden="true"></div>
                <div class="ck6q6 c1laq cevzo cw2fq">Land your dream job</div>
                    <div class="cip9s cu7if clt06">Get a weekly email with the latest startup jobs.</div>
                    @error('email') <h6 class="text-red-500">{{ $message }}</h6> @enderror
                <form wire:submit.prevent='save' class="cy6kr c0usk">
                    <div class="cfd1l c8og8 c1vmp ca7zr c3tj1 crk6p cti7q">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                        <input wire:model='email' id="email" type="text" name="email" class="cule2 cmi0k cn582 c2fn4 ct5p9 c92ql" placeholder="Your email" aria-label="Your email">
                      
                        <button class="c40tu ch6sm ce7qj cyky3 ctpla czwz3" type="submit">Join Newsletter</button>
                    </div>
                            <!-- Success message -->
                            <!-- <p class="font-medium text-emerald-600 text-center sm:text-left sm:absolute mt-2 opacity-75 text-sm">Thanks for subscribing!</p> -->
                </form>
            </div>
    </div>
</div>
