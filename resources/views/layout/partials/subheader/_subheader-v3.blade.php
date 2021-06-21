{{-- Subheader --}}
<div class="subheader pt-2 pb-2 {{ Metronic::printClasses('subheader', false) }}" id="kt_subheader">
    <div class="{{ Metronic::printClasses('subheader-container', false) }} d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">

            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                {{ @$page_title }}

                @if (isset($page_description) && config('layout.subheader.displayDesc'))
                    <small>{{ @$page_description }}</small>
                @endif
            </h5>

            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4"></div>

            <span class="text-muted font-weight-bold mr-4">#XRS-45670</span>

            <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">
                Add New
            </a>
        </div>
        <div class="d-flex align-items-center">
            <a href="#" class="btn btn-clean btn-hover-light-primary- active btn-sm font-weight-bold font-size-base mr-1">
                Today
            </a>

            <a href="#" class="btn btn-clean btn-hover-light-primary-  btn-sm font-weight-bold font-size-base  mr-1">
                Month
            </a>

            <a href="#" class="btn btn-clean btn-hover-light-primary-  btn-sm font-weight-bold font-size-base mr-1">
                Year
            </a>

            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Metronic::getSVG( "media/svg/icons/Files/File-plus.svg", "svg-icon-success svg-icon-lg") }}
                </a>
                <div class="dropdown-menu p-0 m-0 dropdown-menu-sm dropdown-menu-right py-3">
                    @include('layout.partials.content.dropdowns._dropdown-4')
                </div>
            </div>
        </div>
    </div>
</div>
