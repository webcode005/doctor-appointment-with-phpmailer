            
            </div>
        </div>
<script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
<script>
                        ClassicEditor
                                .create( document.querySelector( '#editor1' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
<script>
                        ClassicEditor
                                .create( document.querySelector( '#trip' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/date-range-picker-demo.js"></script>
        <script>
!function(e){"use strict";function t(t,n,r){for(var o=e(t),i=o.clone(n,r),a=o.find("textarea").add(o.filter("textarea")),l=i.find("textarea").add(i.filter("textarea")),c=o.find("select").add(o.filter("select")),d=i.find("select").add(i.filter("select")),f=0,s=a.length;f<s;++f)e(l[f]).val(e(a[f]).val());for(f=0,s=c.length;f<s;++f)for(var p=0,u=c[f].options.length;p<u;++p)!0===c[f].options[p].selected&&(d[f].options[p].selected=!0);return i}function n(n){var r=e("");try{r=t(n)}catch(t){r=e("<span />").html(n)}return r}function r(t,n,r){var o=e.Deferred();try{var i=(t=t.contentWindow||t.contentDocument||t).document||t.contentDocument||t;r.doctype&&i.write(r.doctype),i.write(n),i.close();var a=!1,l=function(){if(!a){t.focus();try{t.document.execCommand("print",!1,null)||t.print(),e("body").focus()}catch(e){t.print()}t.close(),a=!0,o.resolve()}};e(t).on("load",l),setTimeout(l,r.timeout)}catch(e){o.reject(e)}return o}function o(e,t){return r(window.open(),e,t).always(function(){try{t.deferred.resolve()}catch(e){console.warn("Error notifying deferred",e)}})}function i(e){return!!("object"==typeof Node?e instanceof Node:e&&"object"==typeof e&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName)}e.print=e.fn.print=function(){var a,l,c=this;c instanceof e&&(c=c.get(0)),i(c)?(l=e(c),arguments.length>0&&(a=arguments[0])):arguments.length>0?i((l=e(arguments[0]))[0])?arguments.length>1&&(a=arguments[1]):(a=arguments[0],l=e("html")):l=e("html");var d={globalStyles:!0,mediaPrint:!1,stylesheet:null,noPrintSelector:".no-print",iframe:!0,append:null,prepend:null,manuallyCopyFormValues:!0,deferred:e.Deferred(),timeout:750,title:null,doctype:"<!doctype html>"};a=e.extend({},d,a||{});var f=e("");a.globalStyles?f=e("style, link, meta, base, title"):a.mediaPrint&&(f=e("link[media=print]")),a.stylesheet&&(f=e.merge(f,e('<link rel="stylesheet" href="'+a.stylesheet+'">')));var s=t(l);if((s=e("<span/>").append(s)).find(a.noPrintSelector).remove(),s.append(t(f)),a.title){var p=e("title",s);0===p.length&&(p=e("<title />"),s.append(p)),p.text(a.title)}s.append(n(a.append)),s.prepend(n(a.prepend)),a.manuallyCopyFormValues&&(s.find("input").each(function(){var t=e(this);t.is("[type='radio']")||t.is("[type='checkbox']")?t.prop("checked")&&t.attr("checked","checked"):t.attr("value",t.val())}),s.find("select").each(function(){e(this).find(":selected").attr("selected","selected")}),s.find("textarea").each(function(){var t=e(this);t.text(t.val())}));var u,h,m,y,v=s.html();try{a.deferred.notify("generated_markup",v,s)}catch(e){console.warn("Error notifying deferred",e)}if(s.remove(),a.iframe)try{u=v,m=e((h=a).iframe+""),0===(y=m.length)&&(m=e('<iframe height="0" width="0" border="0" wmode="Opaque"/>').prependTo("body").css({position:"absolute",top:-999,left:-999})),r(m.get(0),u,h).done(function(){setTimeout(function(){0===y&&m.remove()},1e3)}).fail(function(e){console.error("Failed to print from iframe",e),o(u,h)}).always(function(){try{h.deferred.resolve()}catch(e){console.warn("Error notifying deferred",e)}})}catch(e){console.error("Failed to print from iframe",e.stack,e.message),o(v,a)}else o(v,a);return this}}(jQuery);
        </script>
        <script>
            $(document).ready(function(){
                
                 $('input[type="checkbox"][name="print"]').change(function(){
                        
                        if($(this).is(':checked')){
                                $(this).parents('.col').addClass('added-name-to-print');
                                
                                $(this).parents('.col').removeClass('no-print');
                            let getClothingName = $(this).attr('data-clothing');
                            
                            let getSizeColumns = $(`div[data-belong="${getClothingName}"]`);
                            
                            getSizeColumns.addClass('added-size-to-print');
                            getSizeColumns.removeClass('no-print')
                        }
                        
                        else{
                                $(this).parents('.col').removeClass('added-name-to-print');
                                
                                $(this).parents('.col').addClass('no-print');
                                
                            let getClothingName = $(this).attr('data-clothing');
                            
                            let getSizeColumns = $(`div[data-belong="${getClothingName}"]`);
                            
                            getSizeColumns.removeClass('added-size-to-print');
                            getSizeColumns.addClass('no-print');
                        }
                        
                        
                        
                        
                    });
                    
                
                $('#print-table-btn').click(function(e){
                    e.preventDefault();
                    $("#table-to-print").print({
                        noPrintSelector :'.no-print',
                        addGlobalStyles : false
                    });
                }) ;
            });
        </script>  
         <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
        <script>

        function ExportToExcel(type, fn, dl) {
            var elt = document.getElementById('dataTable');
            var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
            return dl ?
                XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
                XLSX.writeFile(wb, fn || ('DataSheet.' + (type || 'xlsx')));
        }

    </script>
        
        <script src="js/sb-customizer.js"></script>
    </body>
</html>
