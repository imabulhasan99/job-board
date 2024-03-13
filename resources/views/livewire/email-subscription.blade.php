<div>
    <div class="coscr cokkt czhnl coh2n">
        <div class="cwq9z cwkz1 c0qn4 czbam c6kou">
            <div class="c6kdq cjxga c8f1b c3soh c7z1d cqwhl czhnl c2cn0 cww2f comjk cmwpt cjlhc" aria-hidden="true"></div>
            <div class="ck6q6 c1laq cevzo cw2fq">Land your dream job</div>
            <div class="cip9s cu7if clt06">Get a weekly email with the latest startup jobs.</div>
            <form class="cy6kr c0usk" wire:submit.prevent='save'>
                <div class="cfd1l c8og8 c1vmp ca7zr c3tj1 crk6p cti7q">
                    <input class="cule2 cmi0k cn582 c2fn4 ct5p9 c92ql" wire:model.blur='email' type="email"
                        name="email" placeholder="Your email" aria-label="Your email">
                    <button class="c40tu ch6sm ce7qj cyky3 ctpla czwz3" type="submit">Join Newsletter</button>
                </div>


                <!-- Success message -->
                <!-- <p class="mt-2 text-center text-sm font-medium text-emerald-600 opacity-75 sm:absolute sm:text-left">Thanks for subscribing!</p> -->
            </form>
            @error('email')
                <p style="color:rgb(188, 16, 16)">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
