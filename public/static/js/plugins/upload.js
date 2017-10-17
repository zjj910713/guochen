var upload_qiniu = function(settings){
        var inputFile = $('#'+settings.inputFile);
        var msg = $('#msg');
        var Qiniu = new QiniuJsSDK();
        var uploader = Qiniu.uploader({
            runtimes: 'html5,flash,html4',    //上传模式,依次退化
            browse_button: settings.inputFile,       //上传选择的点选按钮，**必需**
            uptoken_url:settings.uptoken_url,
            //若未指定uptoken_url,则必须指定 uptoken ,uptoken由其他程序生成
            save_key: false,        // 默认 false。若在服务端生成uptoken的上传策略中指定了 `sava_key`，则开启，SDK在前端将不对key进行任何处理
            domain: settings.domain,
            container: settings.browse_button,//上传区域DOM ID，默认是browser_button的父元素，
            max_file_size: '50mb',           //最大文件体积限制
            flash_swf_url: '/js/plupload/Moxie.swf',  //引入flash,相对路径
            max_retries: 2,                   //上传失败最大重试次数
            dragdrop: true,                   //开启可拖曳上传
            drop_element: settings.browse_button,        //拖曳上传区域元素的ID，拖曳文件或文件夹后可触发上传
            chunk_size: '50mb',                //分块上传时，每片的体积
            auto_start:settings.auto_start,                 //选择文件后自动上传，若关闭需要自己绑定事件触发上传
            unique_names:true,
            init: {
                'FilesAdded': function(up, files) {
                    settings.FilesAdded(up, files);

                },
                'BeforeUpload': function(up, file) {
                    settings.BeforeUpload(up,file);
                    // 每个文件上传前,处理相关的事情
                    // msg.append(' BeforeUpload 事件（每个文件上传前,处理相关的事情）<br />');
                },
                'UploadProgress': function(up, file) {
                    settings.UploadProgress(up,file);
                    // 每个文件上传时,处理相关的事情
                    //var percent = Math.round(file.loaded / file.size * 100);
                    // msg.append(' UploadProgress 事件（每个文件上传时,处理相关的事情），已上传：' +  percent + '%<br />');
                },
                'FileUploaded': function(up, file, info) {
                    settings.FileUploaded(up, file, info);
                    // 每个文件上传成功后,处理相关的事情
                    // 其中 info 是文件上传成功后，服务端返回的json，形式如
                    // {
                    //    "hash": "Fh8xVqod2MQ1mocfI4S4KpRL6D98",
                    //    "key": "gogopher.jpg"
                    //  }
                    // 参考http://developer.qiniu.com/docs/v6/api/overview/up/response/simple-response.html
                    // var domain = up.getOption('domain');
                    // var res = parseJSON(info);
                    // var sourceLink = domain + res.key; 获取上传成功后的文件的Url
                    //msg.append(' FileUploaded 事件（每个文件上传成功后,处理相关的事）' + JSON.stringify(info) + '<br />');
                },
                'Error': function(up, err, errTip) {
                    //上传出错时,处理相关的事情<br>
                    //msg.append(' Error 事件（上传出错时,处理相关的事情）<br />');
                },
                'UploadComplete': function() {
                    settings.UploadComplete()
                    //队列文件处理完毕后,处理相关的事情
                    //msg.append(' UploadComplete 事件（队列文件处理完毕后,处理相关的事情）<br />');
                },
                'Key': function(up, file) {
                    // 若想在前端对每个文件的key进行个性化处理，可以配置该函数
                    // 该配置必须要在 unique_names: false , save_key: false 时才生效
                    var key = "";
                    // do something with key here
                    return key
                }
            }
        });
        return uploader
    }

