
function loaded(){
    var $tabs = $('#tabs').tabs();
    $tabs.tabs('select', 2);
}

function myFunc(){
    var $tabs = $('#tabs').tabs();
    var selected = $tabs.tabs('option', 'selected'); // => 0
    alert("Selected tab is "+selected);
}
function show(id) {
    //alert("clied show");
    $(id).show("slow");
}
function hide(id) {
    //alert("clied hide");
    $(id).hide('slow');
}

function selectTab(sel){
    var $tabs =   $('#tabs').tabs({
        //if membership tab is clicked, go to the url directly not in the tab.
        select: function(event, ui) {
            var url = $.data(ui.tab, 'load.tabs');
            if( url && url=="http://www.kim.ac.ke/membership" ) {
                location.href = url;
                return false;
            }
            return true;
        }
    });
    //alert("called select tab 2");
    $tabs.tabs('select', sel);
//alert("called select tab 3");
                             
}
function loadUrl(div,url) {
    if($(div).css("display")!="none"){
        hide(div);
    }
    loader(div, url+"/"+div.substr(1));
}
            
function loadUrlSlow(div,url) {//without appending the div at the end
    if($(div).css("display")!="none"){
        hide(div);
    }
    loader(div, url);
}

function loader(div,url){//loads without appending the div at the end
    $(div).load(url,function() {
        show(div);
    });
}

function gotoUrl(url,prompt){
    if(confirm(prompt)){
        window.location=url;
    }
}
function addDocType(parent){
    var docType=prompt("Enter document type");
    if(docType && docType.length>0){
        window.location="<?= base_url() ?>index.php?/admin_settings/saveDocType/"+parent+"/"+docType;
    }
}
function editDocType(tid,currentName){
    //alert("called");
    var docType=prompt("Enter document type",currentName);
    if(docType && docType.length>0){
        window.location="<?= base_url() ?>index.php?/admin_settings/editDocType/"+tid+"/"+docType;
    }
}

function initDialog(dlgId,title){
    $(function() {
        $(dlgId).dialog({
            autoOpen: false,
            modal: false,
            title: title,
            width: 350
        });
    });
}

function openDialog(dlgId){
    $(dlgId).dialog('open')
}
            
function closeDialog(dlgId){
    $(dlgId).dialog('close')
}