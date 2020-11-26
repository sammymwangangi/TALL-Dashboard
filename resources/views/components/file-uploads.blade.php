<div
    class="my-4 p-4 bg-gradient-to-r from-green-400 to-blue-500 rounded"
    x-data="{
        pond: null
    }"

    x-init="
        FilePond.registerPlugin(FilePondPluginFileValidateType);
        FilePond.registerPlugin(FilePondPluginFileValidateSize);
        FilePond.registerPlugin(FilePondPluginImagePreview);
        FilePond.setOptions({
            acceptedFileTypes:
            [
                'image/png', 'image/jpeg'
            ],
            allowMultiple: true,
            maxFileSize: '1MB'
        });
        const filepond = FilePond.create(
            $refs.filepond
        );
        pond = filepond;
    "

>
    <div class="text-3xl text-gray-100 font-semibold text-center mb-6">
        File Upload using <span class="uppercase font-bold">Filepond</span>
        <p class="mt-2 font-medium text-sm text-white">Courtesy of <a href="https://www.alptail.com/all/?open=filepond"><span class="font-bold text-gray-800">Alptail</span></a></p>
    </div>
    <input type="file" x-ref="filepond">
</div>
