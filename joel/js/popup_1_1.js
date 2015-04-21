
                        function open_infos()
                        {
                                width = 1000;
                                height = 800;
                                if(window.innerWidth)
                                {
                                        var left = (window.innerWidth-width)/2;
                                        var top = (window.innerHeight-height)/2;
                                }
                                else
                                {
                                        var left = (document.body.clientWidth-width)/2;
                                        var top = (document.body.clientHeight-height)/2;
                                }

                                window.open('http://fullmarketingdigital.com/joel/html/popup.html','Mentions Légales','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+'');
                        }