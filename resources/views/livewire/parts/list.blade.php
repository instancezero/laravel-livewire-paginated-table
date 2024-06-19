<section>
    <x-secondary-button wire:click="populate(10)">Add records</x-secondary-button>
    <x-secondary-button wire:click="purge">Purge All Records</x-secondary-button>
    @if(count($parts))
        <ol class="collection collection-container">
            <!-- The first list item is the header of the table -->
            <li class="item item-container">
                <div class="attribute"></div>
                <div class="attribute" data-name="#">#</div>
                <!-- Enclose semantically similar attributes as a div hierarchy -->
                <div class="attribute-container part-information">
                    <div class="attribute-container part-id">
                        <div class="attribute" data-name="Part Number">Part Number</div>
                        <div class="attribute" data-name="Part Description">Part Description</div>
                    </div>
                    <div class="attribute-container vendor-information">
                        <div class="attribute">Vendor Number</div>
                        <div class="attribute">Vendor Name</div>
                    </div>
                </div>
                <div class="attribute-container quantity">
                    <div class="attribute">Order Qty.</div>
                    <div class="attribute">Receive Qty.</div>
                </div>
                <div class="attribute-container cost">
                    <div class="attribute">Cost</div>
                    <div class="attribute">Extended Cost</div>
                </div>
                <div class="attribute-container duty">
                    <div class="attribute">Duty %</div>
                    <div class="attribute">Duty</div>
                </div>
                <div class="attribute-container freight">
                    <div class="attribute">Freight %</div>
                    <div class="attribute">Freight</div>
                </div>
                <div class="attribute">UOM</div>
                <div class="attribute">Vendor Part#</div>
            </li>
            <!-- The rest of the items in the list are the actual data -->
            @foreach ($parts as $part)
                <li class="item item-container" wire:key="{{ $part->id }}">
                    <div class="attribute md:text-center" data-name="Select"><input type="checkbox" name="" id="{{ $part->id }}"></div>
                    <div class="attribute md:text-center" data-name="#">{{ $loop->index + 1 }}</div>
                    <div class="attribute-container part-information">
                        <div class="attribute-container part-id">
                            <div class="attribute" data-name="Part Number:">{{ $part->partNumber }}</div>
                            <div class="attribute" data-name="Part Description:">{{ $part->partDescription }}</div>
                        </div>
                        <div class="attribute-container vendor-information">
                            <div class="attribute" data-name="Vendor Number:">{{ $part->vendorNumber }}</div>
                            <div class="attribute" data-name="Vendor Name:">{{ $part->vendorName }}</div>
                        </div>
                    </div>
                    <div class="attribute-container quantity">
                        <div class="attribute md:text-end" data-name="Order Qty.:">{{ $part->orderQuantity }}</div>
                        <div class="attribute md:text-end" data-name="Receive Qty.:">{{ $part->receiveQuantity }}</div>
                    </div>
                    <div class="attribute-container cost">
                        <div class="attribute md:text-end" data-name="Cost:">${{ number_format($part->cost, 2) }}</div>
                        <div class="attribute md:text-end" data-name="Extended Cost:">
                            ${{ number_format($part->extendedCost, 2) }}</div>
                    </div>
                    <div class="attribute-container duty">
                        <div class="attribute md:text-end" data-name="Duty %:">{{ number_format($part->dutyPct, 1) }}%</div>
                        <div class="attribute md:text-end" data-name="Duty Amount:">${{ number_format($part->duty, 2) }}</div>
                    </div>
                    <div class="attribute-container freight">
                        <div class="attribute md:text-end" data-name="Freight %:">{{ number_format($part->freightPct, 1) }}%</div>
                        <div class="attribute md:text-end" data-name="Freight Amount:">${{ number_format($part->freight, 2) }}</div>
                    </div>
                    <div class="attribute md:text-center" data-name="UOM:">{{ $part->uom }}</div>
                    <div class="attribute" data-name="Vendor Part#:">{{ $part->vendorPart }}</div>
                </li>
            @endforeach
        </ol>
    @else
        <p>There are no parts in the table.</p>
    @endif
    {{ $parts->links() }}
</section>
