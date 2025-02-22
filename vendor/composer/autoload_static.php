<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88baa161189e04dba39b37c134f2f644
{
    public static $files = array (
        '0c6f877f03a67a7485a2a748706e2f2f' => __DIR__ . '/..' . '/h5p/h5p-core/h5p.classes.php',
        'a63ae9f41847366feffbb295da33fc13' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-development.class.php',
        'b0f066922f2544ef1e43b5d30974b0f1' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-file-storage.interface.php',
        '7d1b634d21347f43384b44f967b40c2c' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-default-storage.class.php',
        '8f1b3be0fc9e7e49e7e87a1333e72895' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-event-base.class.php',
        '5c8bedd5fea2fc059b78c23b68c59a4b' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-metadata.class.php',
        'ed56202f592894ac220ad52836863d2b' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor.class.php',
        'dd4ac5e4f4a7777515e9451316be622c' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-file.class.php',
        '138126db212e09ea471720e87b638b63' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-ajax.class.php',
        '920009c17c818a2668db044d76f129b9' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-storage.interface.php',
        '101279c1523ab77899b4b6921c749836' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-ajax.interface.php',
        'e9da0687bf61d492ff6049163121c6a2' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\H5P\\' => 33,
            'srag\\Plugins\\H5P\\' => 17,
            'srag\\LibraryLanguageInstaller\\H5P\\' => 34,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DevTools\\H5P\\' => 18,
            'srag\\DIC\\H5P\\' => 13,
            'srag\\CustomInputGUIs\\H5P\\' => 25,
            'srag\\ActiveRecordConfig\\H5P\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\H5P\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibraryLanguageInstaller\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librarylanguageinstaller/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DevTools\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/devtools/src',
        ),
        'srag\\DIC\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\H5P\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ilH5PConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilH5PConfigGUI.php',
        'ilH5PExporter' => __DIR__ . '/../..' . '/classes/class.ilH5PExporter.php',
        'ilH5PImporter' => __DIR__ . '/../..' . '/classes/class.ilH5PImporter.php',
        'ilH5PPlugin' => __DIR__ . '/../..' . '/classes/class.ilH5PPlugin.php',
        'ilObjH5P' => __DIR__ . '/../..' . '/classes/class.ilObjH5P.php',
        'ilObjH5PAccess' => __DIR__ . '/../..' . '/classes/class.ilObjH5PAccess.php',
        'ilObjH5PGUI' => __DIR__ . '/../..' . '/classes/class.ilObjH5PGUI.php',
        'ilObjH5PListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjH5PListGUI.php',
        'srag\\ActiveRecordConfig\\H5P\\Config\\AbstractFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractFactory.php',
        'srag\\ActiveRecordConfig\\H5P\\Config\\AbstractRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractRepository.php',
        'srag\\ActiveRecordConfig\\H5P\\Config\\Config' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Config.php',
        'srag\\CustomInputGUIs\\H5P\\AjaxCheckbox\\AjaxCheckbox' => __DIR__ . '/..' . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
        'srag\\CustomInputGUIs\\H5P\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\ColorPickerInputGUI\\ColorPickerInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\H5P\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\H5P\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\H5P\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\H5P\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\H5P\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\H5P\\Loader\\CustomInputGUIsLoaderDetector' => __DIR__ . '/..' . '/srag/custominputguis/src/Loader/CustomInputGUIsLoaderDetector.php',
        'srag\\CustomInputGUIs\\H5P\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\H5P\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\H5P\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\H5P\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\H5P\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\H5P\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\H5P\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\H5P\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\H5P\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\H5P\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\H5P\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\H5P\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\H5P\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\H5P\\Cron\\FixUITemplateInCronContext' => __DIR__ . '/..' . '/srag/dic/src/Cron/FixUITemplateInCronContext.php',
        'srag\\DIC\\H5P\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\H5P\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\H5P\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\H5P\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\H5P\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\H5P\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\H5P\\DIC\\Implementation\\ILIAS70DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS70DIC.php',
        'srag\\DIC\\H5P\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\H5P\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\H5P\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\H5P\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\H5P\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\H5P\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\H5P\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\H5P\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\H5P\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\H5P\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\H5P\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\H5P\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\H5P\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\H5P\\Version\\PluginVersionParameter' => __DIR__ . '/..' . '/srag/dic/src/Version/PluginVersionParameter.php',
        'srag\\DIC\\H5P\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\H5P\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\DevTools\\H5P\\DevToolsCtrl' => __DIR__ . '/..' . '/srag/devtools/src/class.DevToolsCtrl.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibraryLanguageInstaller\\H5P\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/librarylanguageinstaller/src/LibraryLanguageInstaller.php',
        'srag\\Plugins\\H5P\\Action\\H5PActionGUI' => __DIR__ . '/../..' . '/src/Action/class.H5PActionGUI.php',
        'srag\\Plugins\\H5P\\Content\\Content' => __DIR__ . '/../..' . '/src/Content/Content.php',
        'srag\\Plugins\\H5P\\Content\\ContentExporter' => __DIR__ . '/../..' . '/src/Content/ContentExporter.php',
        'srag\\Plugins\\H5P\\Content\\ContentImporter' => __DIR__ . '/../..' . '/src/Content/ContentImporter.php',
        'srag\\Plugins\\H5P\\Content\\ContentLibrary' => __DIR__ . '/../..' . '/src/Content/ContentLibrary.php',
        'srag\\Plugins\\H5P\\Content\\ContentUserData' => __DIR__ . '/../..' . '/src/Content/ContentUserData.php',
        'srag\\Plugins\\H5P\\Content\\ContentsTableGUI' => __DIR__ . '/../..' . '/src/Content/ContentsTableGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\DeleteOldTmpFilesJob' => __DIR__ . '/../..' . '/src/Content/Editor/DeleteOldTmpFilesJob.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditContentFormGUI' => __DIR__ . '/../..' . '/src/Content/Editor/EditContentFormGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditorAjax' => __DIR__ . '/../..' . '/src/Content/Editor/EditorAjax.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditorStorage' => __DIR__ . '/../..' . '/src/Content/Editor/EditorStorage.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\Factory' => __DIR__ . '/../..' . '/src/Content/Editor/Factory.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\ImportContentFormGUI' => __DIR__ . '/../..' . '/src/Content/Editor/ImportContentFormGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\Repository' => __DIR__ . '/../..' . '/src/Content/Editor/Repository.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\ShowEditor' => __DIR__ . '/../..' . '/src/Content/Editor/ShowEditor.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\TmpFile' => __DIR__ . '/../..' . '/src/Content/Editor/TmpFile.php',
        'srag\\Plugins\\H5P\\Content\\Factory' => __DIR__ . '/../..' . '/src/Content/Factory.php',
        'srag\\Plugins\\H5P\\Content\\Repository' => __DIR__ . '/../..' . '/src/Content/Repository.php',
        'srag\\Plugins\\H5P\\Content\\ShowContent' => __DIR__ . '/../..' . '/src/Content/ShowContent.php',
        'srag\\Plugins\\H5P\\Event\\DeleteOldEventsJob' => __DIR__ . '/../..' . '/src/Event/DeleteOldEventsJob.php',
        'srag\\Plugins\\H5P\\Event\\Event' => __DIR__ . '/../..' . '/src/Event/Event.php',
        'srag\\Plugins\\H5P\\Event\\EventFramework' => __DIR__ . '/../..' . '/src/Event/EventFramework.php',
        'srag\\Plugins\\H5P\\Event\\Factory' => __DIR__ . '/../..' . '/src/Event/Factory.php',
        'srag\\Plugins\\H5P\\Event\\Repository' => __DIR__ . '/../..' . '/src/Event/Repository.php',
        'srag\\Plugins\\H5P\\Framework\\Framework' => __DIR__ . '/../..' . '/src/Framework/Framework.php',
        'srag\\Plugins\\H5P\\Hub\\Factory' => __DIR__ . '/../..' . '/src/Hub/Factory.php',
        'srag\\Plugins\\H5P\\Hub\\Form\\SettingsFormBuilder' => __DIR__ . '/../..' . '/src/Hub/Form/SettingsFormBuilder.php',
        'srag\\Plugins\\H5P\\Hub\\HubDetailsFormGUI' => __DIR__ . '/../..' . '/src/Hub/HubDetailsFormGUI.php',
        'srag\\Plugins\\H5P\\Hub\\HubTableGUI' => __DIR__ . '/../..' . '/src/Hub/HubTableGUI.php',
        'srag\\Plugins\\H5P\\Hub\\RefreshHubJob' => __DIR__ . '/../..' . '/src/Hub/RefreshHubJob.php',
        'srag\\Plugins\\H5P\\Hub\\Repository' => __DIR__ . '/../..' . '/src/Hub/Repository.php',
        'srag\\Plugins\\H5P\\Hub\\ShowHub' => __DIR__ . '/../..' . '/src/Hub/ShowHub.php',
        'srag\\Plugins\\H5P\\Hub\\UploadLibraryFormGUI' => __DIR__ . '/../..' . '/src/Hub/UploadLibraryFormGUI.php',
        'srag\\Plugins\\H5P\\Job\\Factory' => __DIR__ . '/../..' . '/src/Job/Factory.php',
        'srag\\Plugins\\H5P\\Job\\Repository' => __DIR__ . '/../..' . '/src/Job/Repository.php',
        'srag\\Plugins\\H5P\\Library\\Counter' => __DIR__ . '/../..' . '/src/Library/Counter.php',
        'srag\\Plugins\\H5P\\Library\\Factory' => __DIR__ . '/../..' . '/src/Library/Factory.php',
        'srag\\Plugins\\H5P\\Library\\Library' => __DIR__ . '/../..' . '/src/Library/Library.php',
        'srag\\Plugins\\H5P\\Library\\LibraryCachedAsset' => __DIR__ . '/../..' . '/src/Library/LibraryCachedAsset.php',
        'srag\\Plugins\\H5P\\Library\\LibraryDependencies' => __DIR__ . '/../..' . '/src/Library/LibraryDependencies.php',
        'srag\\Plugins\\H5P\\Library\\LibraryHubCache' => __DIR__ . '/../..' . '/src/Library/LibraryHubCache.php',
        'srag\\Plugins\\H5P\\Library\\LibraryLanguage' => __DIR__ . '/../..' . '/src/Library/LibraryLanguage.php',
        'srag\\Plugins\\H5P\\Library\\Repository' => __DIR__ . '/../..' . '/src/Library/Repository.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\Factory' => __DIR__ . '/../..' . '/src/ObjectSettings/Factory.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\Form\\FormBuilder' => __DIR__ . '/../..' . '/src/ObjectSettings/Form/FormBuilder.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\ObjectSettings' => __DIR__ . '/../..' . '/src/ObjectSettings/ObjectSettings.php',
        'srag\\Plugins\\H5P\\ObjectSettings\\Repository' => __DIR__ . '/../..' . '/src/ObjectSettings/Repository.php',
        'srag\\Plugins\\H5P\\Options\\Factory' => __DIR__ . '/../..' . '/src/Options/Factory.php',
        'srag\\Plugins\\H5P\\Options\\Repository' => __DIR__ . '/../..' . '/src/Options/Repository.php',
        'srag\\Plugins\\H5P\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'srag\\Plugins\\H5P\\Result\\Factory' => __DIR__ . '/../..' . '/src/Result/Factory.php',
        'srag\\Plugins\\H5P\\Result\\Repository' => __DIR__ . '/../..' . '/src/Result/Repository.php',
        'srag\\Plugins\\H5P\\Result\\Result' => __DIR__ . '/../..' . '/src/Result/Result.php',
        'srag\\Plugins\\H5P\\Result\\ResultsTableGUI' => __DIR__ . '/../..' . '/src/Result/ResultsTableGUI.php',
        'srag\\Plugins\\H5P\\Result\\SolveStatus' => __DIR__ . '/../..' . '/src/Result/SolveStatus.php',
        'srag\\Plugins\\H5P\\Utils\\H5PTrait' => __DIR__ . '/../..' . '/src/Utils/H5PTrait.php',
        'srag\\RemovePluginDataConfirm\\H5P\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\H5P\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\H5P\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\H5P\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88baa161189e04dba39b37c134f2f644::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88baa161189e04dba39b37c134f2f644::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88baa161189e04dba39b37c134f2f644::$classMap;

        }, null, ClassLoader::class);
    }
}
