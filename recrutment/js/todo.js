
// function AlbumCtrl($scope, $http, $timeout) {
//     $scope.url = 'http://localhost/a/trunk/recrutment/index.php/jobPosting/listAllJobposts';
//     // $scope.images = [];
//     // $scope.imageCategories = [];
//     // $scope.currentImage = {};

//     // $scope.handleImagesLoaded = function (data, status) {
//     //     $scope.images = data;
//     //     // Set the current image to the first image in images
//     //     $scope.currentImage = _.first($scope.images);
//     //     // Create a unique array based on the category property in the images objects
//     //     $scope.imageCategories = _.uniq(_.pluck($scope.images, 'category'));
//     // }

//     $scope.fetch = function () {
//         $http.get($scope.url).success($scope.handleImagesLoaded);
//         alert(handleImagesLoaded);
//     };

//     // $scope.setCurrentImage = function (image) {
//     //     $scope.currentImage = image;
//     // };

//     // Defer fetch for 1 second to give everything an opportunity layout
//     $timeout($scope.fetch, 1000);
// }

function FetchCtrl($scope, $http, $templateCache) {
  $scope.method = 'GET';
  $scope.url = 'http://localhost/a/trunk/recrutment/index.php/jobPosting/listAllJobposts';

  $scope.fetch = function() {
    $scope.code = null;
    $scope.response = null;

    $http({method: $scope.method, url: $scope.url, cache: $templateCache}).
      success(function(data, status) {
        $scope.status = status;
        $scope.data = data;
      }).
      error(function(data, status) {
        $scope.data = data || "Request failed";
        $scope.status = status;
    });
  };

  $scope.updateModel = function(method, url) {
    $scope.method = method;
    $scope.url = url;
  };
}