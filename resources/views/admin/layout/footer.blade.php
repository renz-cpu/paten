
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <!-- Cancel Button -->
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button class="btn btn-primary" type="submit" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
    
</div>
</div>
</div>