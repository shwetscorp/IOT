$(document).ready(function(){
	//code here...
	var code = $(".codemirror-textarea")[0];
	var config, editor;

    config = {
        lineNumbers: true,
        mode: "clike",
        theme: "default",
        indentWithTabs: false,
        closeBrackets: true,
        closeTags: true,
        matchBrackets: true,
        continueList: true,
        trailingSpace: true,
        enterMode: "keep",
        tabMode: "shift",
        readOnly: true
    };

    editor = CodeMirror.fromTextArea(code, config);


});
