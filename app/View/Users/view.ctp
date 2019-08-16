<div class="breadcrumb-area">
    <nav aria-label="パンくずリスト">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">ホーム</a></li>
        <li class="breadcrumb-item active" aria-current="page">メンバー</li>
      </ol>
    </nav>
</div>
<div class="mx-auto">
  <form method="post" action="./FrontController.php" enctype="multipart/form-data">

    <div class="col-sm">
        <div id="id-title">
                <h1>メンバー</h1>
        </div>
        <div class="container-fluid" id="id-list">
            
            <div class="row"  style="margin-bottom: 10px;">
                <div class="col-sm-2">
                    <button type="button" name="addWorkflow" class="btn btn-info">メンバー登録</button>
                </div>
            </div>
            <div class="row border-bottom lulu_table" v-for="(downloadFileInfo, index) in downloadFileInfos">
                <div class="col-sm-1 d-flex align-items-end" v-if="index > 0">{{index}}</div>
                <div class="col-sm-1 d-flex align-items-end" v-else></div>
                <div class="col-sm-3 d-flex align-items-end" v-if="index > 0">
                        {{downloadFileInfo.userName}}
                </div>
                <div class="col-sm-3 d-flex align-items-end" v-else>
                    <a href="#" class="btn btn-link p-0">
                        {{downloadFileInfo.userName}}
                    </a>
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-if="index > 0">
                        {{downloadFileInfo.address}}
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-else>
                    <a href="#" class="btn btn-link p-0">
                        {{downloadFileInfo.address}}
                    </a>
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-if="index > 0">
                        {{downloadFileInfo.role}}
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-else>
                    <a href="#" class="btn btn-link p-0">
                        {{downloadFileInfo.role}}
                    </a>
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-if="index > 0">
                        {{downloadFileInfo.created}}
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-else>
                    <a href="#" class="btn btn-link p-0">
                        {{downloadFileInfo.created}}
                    </a>
                </div>
                <div class="col-sm-2 d-flex align-items-end" v-if="index > 0">
                    <button class="btn btn-outline-primary btn-sm mr-2" v-if="downloadFileInfo.id == '1'">
                        <i class="far fa-edit"></i>
                    </button>
                    <button class="btn btn-outline-info btn-sm mr-2">
                        <i class="far fa-comment"></i>
                    </button>
                    <button class="btn btn-outline-danger btn-sm mr-2" onclick="confirm('メンバー情報を削除します。よろしいですか？');">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
                <div class="col-sm-2" v-else>
                    操作
                </div>
            </div>                                                
        </div>
        <script>
            var list = new Vue({
              el: '#id-list',
              data: {
                parentMessage: 'Parent',
                downloadFileInfos: [
                  {
                      id : "ID",
                      created: '作成日',
                      userName: '名前',
                      address: '連絡種別',
                      role: '担当'
                  },
                  {
                      id : "1",
                      created: '2019-08-12',
                      userName: '藤宮　彩',
                      address: 'mail',
                      role: 'シナリオ'
                  },
                  {
                      id : "2",
                      created: '2019-08-12',
                      userName: '田中　太郎',
                      address: 'twitter',
                      role: '素材'
                  },
                  {
                      id : "3",
                      created: '2019-08-15',
                      userName: '山田　花子',
                      address: 'line',
                      role: '動画'
                  }
                ]
              }
            })
        </script>
        
    </div>
</form>
</div>
