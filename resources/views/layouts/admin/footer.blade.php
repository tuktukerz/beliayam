<footer>
  <div class="footer clearfix mb-0 text-muted">
    <div class="float-start">
      <p>2022 © RASA Group</p>
    </div>
  </div>
</footer>
</div>
</div>
</div>


</body>
<script src="{{asset('dist')}}/assets/js/bootstrap.js"></script>
<script src="{{asset('dist')}}/assets/js/app.js"></script>

<!-- DataTable -->
<script src="{{asset('dist')}}/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{asset('dist')}}/assets/js/pages/simple-datatables.js"></script>

<!-- Datepicker -->
<script src="{{asset('dist')}}/assets/extensions/flatpickr/flatpickr.min.js"></script>
<script src="{{asset('dist')}}/assets/js/pages/date-picker.js"></script>

{{--
<!-- apexchart -->
<script src="{{asset('dist')}}/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('dist')}}/assets/extensions/dayjs/dayjs.min.js"></script>
<script src="{{asset('dist')}}/assets/js/pages/ui-apexchart.js"></script> --}}

@stack('scripts')

</html>